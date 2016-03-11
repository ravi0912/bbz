<?php

namespace App\Http\Controllers;

use App\Boost;
use App\Notification;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function addSkill(Request $request){
        $skill_not_copied =  Skill::whereUser_idAndSkill(\Auth::User()->id, $request['skill'])->count();
        if($skill_not_copied == 0)
        {
            Skill::create([
                'user_id'           => \Auth::User()->id,
                'skill'             => $request['skill'],
                'total_users_boost' => 0,
            ]);
        }
        $skills = Skill::where('user_id',\Auth::User()->id)->get();
        $skillsCount = Skill::where('user_id',\Auth::User()->id)->count();
        if($skillsCount > 0){
            foreach($skills as $skill){
                $boostCount[$skill->id] = Boost::whereSkill_idAndUser_id_1($skill->id,\Auth::User()->id)->count();
            }
        }else{
            $boostCount = 0;
        }
        return view('partials.skillUpdated', ['skills' => $skills,'boostCount' => $boostCount,'skillsCount' => $skillsCount]);

    }

    public function deleteSkill(Request $request){
        Skill::whereIdAndUser_id($request['skill_id'],\Auth::User()->id)->delete();
        Boost::whereSkill_idAndUser_id_1($request['skill_id'],\Auth::User()->id)->delete();
        $skills = Skill::where('user_id',\Auth::User()->id)->get();
        $skillsCount = Skill::where('user_id',\Auth::User()->id)->count();
        if($skillsCount > 0){
            foreach($skills as $skill){
                $boostCount[$skill->id] = Boost::whereSkill_idAndUser_id_1($skill->id,\Auth::User()->id)->count();
            }
        }else{
            $boostCount = 0;
        }
        return view('partials.skillUpdated', ['skills' => $skills,'boostCount' => $boostCount,'skillsCount' => $skillsCount]);
    }

    public function boostSkill(Request $request){
        $count =   Boost::where([
                'skill_id'   => $request['skill_id'],
                'user_id_1'  => $request['user_id_1'],
                'user_id_2'  => \Auth::User()->id
            ])->count();
        if($count == 0) {
            Boost::create([
                'skill_id' => $request['skill_id'],
                'user_id_1' => $request['user_id_1'],
                'user_id_2' => \Auth::User()->id
            ]);
            $skill = Skill::whereId($request['skill_id'])->pluck('skill');
            $notify =   \Auth::User()->name.' boosted you in '.$skill;
            Notification::create([
                'user_id'   => $request['user_id_1'],
                'user_id_2' => \Auth::User()->id,
                'status_id' => 0,
                'pages_id' => 0,
                'group_id' => 0,
                'skill_id' => $request['skill_id'],
                'viewed_profile_id' => 0,
                'notification' => $notify,

            ]);

            //Send Mail for boost to user_id_1
            $data = User::whereId($request['user_id_1'])->first();
            $data = array_add($data, 'skill', $notify);
            $user = User::whereId($request['user_id_1'])->first();
            $data = array_add($data, 'name',$user->name);
            Mail::send('emails.boostSkill',array('data'=>$data), function ($message) use ($user) {
                $message->to($user->email,$user->name)->subject('New boost in your skill');
            });



            $total_boosts = Skill::whereIdAndUser_id($request['skill_id'], $request['user_id_1'])->get();
            foreach ($total_boosts as $total_boost) {
                $numberOfBoosts = $total_boost->total_users_boost + 1;
                Skill::whereIdAndUser_id($request['skill_id'], $request['user_id_1'])->update(['total_users_boost' => $numberOfBoosts]);
            }


            $skills = Skill::where('user_id', $request['user_id_1'])->get();
            $skillsCount = Skill::where('user_id', $request['user_id_1'])->count();
            if ($skillsCount > 0) {
                foreach ($skills as $skill) {
                    $boostCount[$skill->id] = Boost::whereSkill_idAndUser_id_1($skill->id, $request['user_id_1'])->count();
                    $auth_boost[$skill->id] = Boost::whereSkill_idAndUser_id_1AndUser_id_2($skill->id, $request['user_id_1'], \Auth::User()->id)->count();
                }
            } else {
                $boostCount = 0;
            }

            return view('partials.boostUpdated', ['skills' => $skills, 'boostCount' => $boostCount, 'skillsCount' => $skillsCount, 'user_id_1' => $request['user_id_1'],'auth_boost' => $auth_boost]);
        }else{
            return 'If you are here. Then We are hiring You!!!';
        }

    }

    public function unBoostSkill(Request $request){
        $count =   Boost::where([
            'skill_id'   => $request['skill_id'],
            'user_id_1'  => $request['user_id_1'],
            'user_id_2'  => \Auth::User()->id
        ])->count();
        if($count == 1) {
            //return $request['skill_id'].$request['user_id_1'].\Auth::User()->id;
            Boost::whereSkill_idAndUser_id_1AndUser_id_2($request['skill_id'],$request['user_id_1'],\Auth::User()->id)->delete();
            $total_boosts = Skill::whereIdAndUser_id($request['skill_id'], $request['user_id_1'])->get();
            foreach ($total_boosts as $total_boost) {
                $numberOfBoosts = $total_boost->total_users_boost - 1;
                Skill::whereIdAndUser_id($request['skill_id'], $request['user_id_1'])->update(['total_users_boost'=> $numberOfBoosts]);
            }


            $skills = Skill::where('user_id', $request['user_id_1'])->get();
            $skillsCount = Skill::where('user_id', $request['user_id_1'])->count();
            if ($skillsCount > 0) {
                foreach ($skills as $skill) {
                    $boostCount[$skill->id] = Boost::whereSkill_idAndUser_id_1($skill->id, $request['user_id_1'])->count();
                    $auth_boost[$skill->id] = Boost::whereSkill_idAndUser_id_1AndUser_id_2($skill->id, $request['user_id_1'], \Auth::User()->id)->count();
                }
            } else {
                $boostCount = 0;
            }

            return view('partials.boostUpdated', ['skills' => $skills, 'boostCount' => $boostCount, 'skillsCount' => $skillsCount, 'user_id_1' => $request['user_id_1'],'auth_boost' => $auth_boost]);
        }else{
            return 'We are hiring You!!!';
        }

    }
}
