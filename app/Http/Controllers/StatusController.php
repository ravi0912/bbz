<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests\PrepareStatusRequest;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{

    /**
     * Create a new Status controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the status.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('status.index');
    }

    /**
     * Show the form for creating a new status.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PrepareStatusRequest $request)
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrepareStatusRequest $request)
    {
        Status::create([
            'user_id' => \Auth::User()->id,
            'body' => $request['body'],

        ]);

        return Status::first();
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
