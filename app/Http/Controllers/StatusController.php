<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\Status;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\PrepareStatusRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

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
    public function index(Request $request)
    {
        //Default image saving

        if (!file_exists("uploads/profiles/".\Auth::User()->id.".jpeg")) {
                $image ="uploads/profiles/default.jpg";
                $size = getimagesize($image);
                $aspectratio = $size[0]/$size[1];
                $img_thumbnail = Image::make($image)->resize(30*$aspectratio,30);
                $img_profile = Image::make($image)->resize(160*$aspectratio,160);
                $imgname = \Auth::User()->id;
                $img_thumbnail->save('uploads/thumbnails/'.$imgname.".jpeg");
                $img_profile->save('uploads/profiles/'.$imgname.".jpeg");
        }


        $statuses = Status::orderBy('created_at', 'desc')->get();
        foreach($statuses as $status){
          $likes[$status->id] =  Like::where('status_id', $status->id)->count();
          $liked[$status->id] =  Like::whereStatus_idAndUser_id($status->id, \Auth::User()->id )->count();
        }

        return view('status.index', ['statuses' => $statuses,'likes' => $likes,'liked'  => $liked]);
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

        return redirect('/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statuses = Status::where('id', $id)->get();
        $likes =  Like::where('status_id', $id)->count();
        $liked =  Like::whereStatus_idAndUser_id($id, \Auth::User()->id )->count();

        return view('status.showStatus', ['statuses' => $statuses,'likes' => $likes,'liked'  => $liked]);
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
    public function destroy(Request $request)
    {
        Status::where('id',$request['status_id'])->delete();
        return redirect('/status');
    }
}
