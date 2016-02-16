<?php

namespace App\Http\Controllers;

use App\Boost;
use App\Connection;
use App\Education;
use App\Http\Requests\PrepareProfileRequest;
use App\Profile;
use App\Skill;
use App\User;
use App\Experience;
use App\Http\Requests\PrepareEducationRequest;
use App\Http\Requests\PrepareExperienceRequest;
use App\Http\Requests\PrepareProjectRequest;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * middleware authentication
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::where('user_id', \Auth::User()->id)->orderBy('start_year', 'desc')->get();
        $projects = Project::where('user_id', \Auth::User()->id)->orderBy('start_year', 'desc')->get();
        $experiences = Experience::where('user_id', \Auth::User()->id)->orderBy('start_year', 'desc')->get();
        $profile_count = Profile::where('user_id', \Auth::User()->id)->count();
        $profiles = Profile::where('user_id', \Auth::User()->id)->get();
        $connections = Connection::whereUser_id_1AndConnection_status(\Auth::User()->id, 1 )->count() + Connection::whereUser_id_2AndConnection_status(\Auth::User()->id, 1 )->count();
        $skills = Skill::where('user_id',\Auth::User()->id)->get();
        $skillsCount = Skill::where('user_id',\Auth::User()->id)->count();
        if($skillsCount > 0){
            foreach($skills as $skill){
                $boostCount[$skill->id] = Boost::whereSkill_idAndUser_id_1($skill->id,\Auth::User()->id)->count();
            }
        }else{
            $boostCount = 0;
        }

        return view('profile.profile', ['educations' => $educations, 'projects' => $projects, 'experiences' => $experiences, 'connections' => $connections,'profile_count' => $profile_count,'profiles' => $profiles,'skills' => $skills,'boostCount' => $boostCount,'skillsCount' => $skillsCount]);
    }



    /**
     * Store a newly created Education in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function educationStore(PrepareEducationRequest $request)
    {
        Education::create([
            'user_id'      => \Auth::User()->id,
            'school'       => $request['school'],
            'start_month'   => $request['start_month'],
            'start_year'   => $request['start_year'],
            'finish_month'  => $request['finish_month'],
            'finish_year'  => $request['finish_year'],
            'degree'       => $request['degree'],
            'branch'       => $request['branch'],
            'grade'        => $request['grade'],
            'experience'   => $request['experience'],
            'description'  => $request['description'],

        ]);
        return redirect('/profile');
    }

    /**
     * Store a newly created Project
     *
     * @param PrepareProjectRequest $request
     */
    public function projectStore(PrepareProjectRequest $request)
    {
        Project::create([
            'user_id'      =>   \Auth::User()->id,
            'name'         =>   $request['name'],
            'occupation'   =>   $request['occupation'],
            'start_month'  =>   $request['start_month'],
            'start_year'   =>   $request['start_year'],
            'finish_month' =>   $request['finish_month'],
            'finish_year'  =>   $request['finish_year'],
            'url'          =>   $request['url'],
            'team_members' =>   $request['team_members'],
            'address'      =>   $request['address'],
            'description'  =>   $request['description'],

        ]);
        return redirect('/profile');
    }

    /**
     * Storing newly created Experience
     *
     * @param PrepareExperienceRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function experienceStore(PrepareExperienceRequest $request)
    {
       if($request['working'])
       {   $request['finish_month'] = 1;
           $request['finish_year'] = 0000;
       }else{
           $request['working'] = 0;
       }

        Experience::create([
            'user_id'      =>   \Auth::User()->id,
            'company_name' =>   $request['company_name'],
            'title'        =>   $request['title'],
            'location'     =>   $request['location'],
            'start_month'  =>   $request['start_month'],
            'start_year'   =>   $request['start_year'],
            'finish_month' =>   $request['finish_month'],
            'finish_year'  =>   $request['finish_year'],
            'working'      =>   $request['working'],
            'description'  =>   $request['description'],

        ]);
        return redirect('/profile');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id == \Auth::User()->id ){
            return redirect('/profile');
        }else{
            $userprofile    = User::whereId($id)->get();
            $educations     = Education::where('user_id', $id)->orderBy('start_year', 'desc')->get();
            $projects       = Project::where('user_id', $id)->orderBy('start_year', 'desc')->get();
            $experiences    = Experience::where('user_id', $id)->orderBy('start_year', 'desc')->get();
            $profiles = Profile::where('user_id', $id)->get();
            $connections = Connection::whereUser_id_1AndConnection_status($id, 1 )->count() + Connection::whereUser_id_2AndConnection_status($id, 1 )->count();
            $count_1 = Connection::whereUser_id_1AndUser_id_2(\Auth::User()->id, $id )->count();
            $count_2 = Connection::whereUser_id_1AndUser_id_2($id, \Auth::User()->id )->count();
            $skills = Skill::where('user_id',$id)->get();
            $skillsCount = Skill::where('user_id',$id)->count();

            if($skillsCount > 0){
                foreach($skills as $skill){
                    $boostCount[$skill->id] = Boost::whereSkill_idAndUser_id_1($skill->id,$id)->count();
                    $auth_boost[$skill->id] = Boost::whereSkill_idAndUser_id_1AndUser_id_2($skill->id,$id,\Auth::User()->id )->count();
                }
            }else{
                $boostCount = 0;
                $auth_boost = 0;
            }
            if($count_1 == 1) {
                $connection_statuses = Connection::whereUser_id_1AndUser_id_2(\Auth::User()->id, $id)->get();
                foreach($connection_statuses as $connection_status){
                    if($connection_status->connection_status == 1) {
                        $connect = 3;   //connected
                    }else{
                        $connect = 2;   //request sent
                    }
                }
            }elseif($count_2 == 1){
                $connection_statuses = Connection::whereUser_id_1AndUser_id_2($id, \Auth::User()->id )->get();
                foreach($connection_statuses as $connection_status){
                    if($connection_status->connection_status == 1) {
                        $connect = 3;   //connected
                    }else{

                        $connect = 1;   //confirm request
                    }
                }
            }else {
                $connect = 0; // No connection
            }

            return view('profile.showprofile', ['educations' => $educations, 'projects' => $projects, 'experiences' => $experiences, 'userprofile' => $userprofile,'connect' => $connect,'connections' => $connections,'skills' => $skills, 'skillsCount' => $skillsCount ,'boostCount' => $boostCount,'auth_boost' => $auth_boost,'profiles' => $profiles ]);

        }
 }

    /**
     *
     * Profile Data Add
     * @param PrepareProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function profileAdd(PrepareProfileRequest $request){
        Profile::create([
            'user_id'             =>   \Auth::User()->id,
            'current_company'     =>   $request['current_company'],
            'current_city'        =>   $request['current_city'],
            'current_state'       =>   $request['current_state'],
            'current_designation' =>   $request['current_designation'],
            'date'                =>   $request['date'],
            'month'               =>   $request['month'],
            'year'                =>   $request['year'],
        ]);

        return redirect('/profile');
    }

    public function profileUpdateShow(Request $request){
        $profiles = Profile::where('user_id',\Auth::User()->id)->get();
        return view('profile.profileEdit',['profiles' => $profiles]);
    }

    /**
     *
     * Profile Data Update
     * @param PrepareProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function profileUpdate(PrepareProfileRequest $request){
        Profile::where('user_id' ,\Auth::User()->id)->update(['current_company' => $request['current_company'],'current_city' => $request['current_city'],'current_state' => $request['current_state'],'current_designation' => $request['current_designation'], 'date' => $request['date'],'month' => $request['month'], 'year' => $request['year'],]);
        return redirect('/profile');
    }


    /**
     * Showing Education data for editing
     * @param PrepareEducationRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function educationUpdateShow(Request $request){
        $educations = Education::whereIdAndUser_id($request['education_id'], \Auth::User()->id)->get();
        return view('profile.profileEducationUpdate',['educations' => $educations]);
    }

    /**
     * Showing Experience data for editing
     * @param PrepareExperienceRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function experienceUpdateShow(Request $request){
        $experiences = Experience::whereIdAndUser_id($request['experience_id'], \Auth::User()->id)->get();
        return view('profile.profileExperienceUpdate',['experiences' => $experiences]);
    }

    /**
     * Showing Project data for editing
     * @param PrepareProjectRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projectUpdateShow(Request $request){
        $projects = Project::whereIdAndUser_id($request['project_id'], \Auth::User()->id)->get();
        return view('profile.profileProjectUpdate',['projects' => $projects]);
    }

    /**
     * education Update of user
     * @param PrepareEducationRequest $request
     */
    public function educationUpdate(PrepareEducationRequest $request){
        Education::whereIdAndUser_id($request['education_id'], \Auth::User()->id)->update([
            'school'       => $request['school'],
            'start_month'   => $request['start_month'],
            'start_year'   => $request['start_year'],
            'finish_month'  => $request['finish_month'],
            'finish_year'  => $request['finish_year'],
            'degree'       => $request['degree'],
            'branch'       => $request['branch'],
            'grade'        => $request['grade'],
            'experience'   => $request['experience'],
            'description'  => $request['description'],
            ]);
        return redirect('/profile');
    }


    /**
     * Experience Update for user
     * @param PrepareExperienceRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function experienceUpdate(PrepareExperienceRequest $request){

        if($request['working'])
        {   $request['finish_month'] = 1;
            $request['finish_year'] = 0000;
        }else{
            $request['working'] = 0;
        }

        Experience::whereIdAndUser_id($request['experience_id'], \Auth::User()->id)->update([
            'company_name' =>   $request['company_name'],
            'title'        =>   $request['title'],
            'location'     =>   $request['location'],
            'start_month'  =>   $request['start_month'],
            'start_year'   =>   $request['start_year'],
            'finish_month' =>   $request['finish_month'],
            'finish_year'  =>   $request['finish_year'],
            'working'      =>   $request['working'],
            'description'  =>   $request['description'],
        ]);

        return redirect('/profile');
    }


    /**
     * Project Update for user
     * @param PrepareProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function projectUpdate(PrepareProjectRequest $request)
    {
        Project::whereIdAndUser_id($request['project_id'], \Auth::User()->id)->update([
            'name'         =>   $request['name'],
            'occupation'   =>   $request['occupation'],
            'start_month'  =>   $request['start_month'],
            'start_year'   =>   $request['start_year'],
            'finish_month' =>   $request['finish_month'],
            'finish_year'  =>   $request['finish_year'],
            'url'          =>   $request['url'],
            'team_members' =>   $request['team_members'],
            'address'      =>   $request['address'],
            'description'  =>   $request['description'],

        ]);
        return redirect('/profile');
    }


}
