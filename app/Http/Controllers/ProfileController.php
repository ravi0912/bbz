<?php

namespace App\Http\Controllers;

use App\Connection;
use App\Education;
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
        return view('profile.profile', ['educations' => $educations, 'projects' => $projects, 'experiences' => $experiences ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        public function store(Request $request)
    {
       //
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
            $count_1 = Connection::whereUser_id_1AndUser_id_2(\Auth::User()->id, $id )->count();
            $count_2 = Connection::whereUser_id_1AndUser_id_2($id, \Auth::User()->id )->count();
            if($count_1 < 1){
                if($count_2 < 1){
                    $connect = 0; // No connection
                }else{
                    $connect = 1; // confirm request
                }
            }else {
                if ($count_2 < 1) {
                    $connect = 2; // request sent
                } else {
                    $connect = 3; // connected
                }
            }

            return view('profile.showprofile', ['educations' => $educations, 'projects' => $projects, 'experiences' => $experiences, 'userprofile' => $userprofile,'connect' => $connect ]);

        }
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
