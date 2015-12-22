<?php

namespace App\Http\Controllers;

use App\Education;

use App\Http\Requests\PrepareEducationRequest;
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
        return view('profile.profile');
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
        return view('profile.profile');
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
            'address'      =>   $request['grade'],
            'description'  =>   $request['description'],

        ]);
        return view('profile.profile');
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
        //
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
