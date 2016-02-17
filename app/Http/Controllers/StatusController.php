<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\Notification;
use App\Status;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\PrepareStatusRequest;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Validator;
use Session;
use File;

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
                $img_profile = Image::make($image)->resize(200*$aspectratio,200);
                $imgname = \Auth::User()->id;
                $path_thumbnail = public_path('uploads/thumbnails/'.$imgname.".jpeg");
                $path_profile = public_path('uploads/profiles/'.$imgname.".jpeg");
                $img_thumbnail->save($path_thumbnail);
                $img_profile->save($path_profile);
        }


        $statuses = Status::orderBy('created_at', 'desc')->get();
        $statusCount = Status::orderBy('created_at', 'desc')->count();
        if($statusCount > 0){
            foreach($statuses as $status){
                $likes[$status->id] =  Like::where('status_id', $status->id)->count();
                $liked[$status->id] =  Like::whereStatus_idAndUser_id($status->id, \Auth::User()->id )->count();
                $countComment[$status->id] = Comment::where('status_id',$status->id)->count();
            }
        }else{
            $likes =0;
            $liked = 0;
            $countComment = 0;
        }


        return view('status.index', ['statuses' => $statuses,'likes' => $likes,'liked'  => $liked,'countComment' => $countComment]);
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
        //$files = Input::file('images');
        $files = false;
        if($files !== false){
            $photo = 1;//error
        }else{
            $photo = 0;
        }
        Status::create([
            'user_id' => \Auth::User()->id,
            'body' => $request['body'],
            'page_id' => null,
            'photo' => $photo,
            '$video' => 0
        ]);


        $file_count = count($files);
        if($files !== false){
            $statuses = Status::where('user_id',\Auth::User()->id)->orderBy('updated_at', 'desc')->first();
            $status_id = $statuses->id;
            $pathAuth = public_path('uploads/statuses/'.\Auth::User()->id);
            File::makeDirectory($pathAuth, $mode = 0777, true, true);
            $path = public_path('uploads/statuses/'.\Auth::User()->id.'/'.$status_id);
            File::makeDirectory($path, $mode = 0777, true, true);

            $uploadcount = 0;
            foreach($files as $file) {
                $rules = array('file' => 'required|mimes:png,gif,jpeg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $mytime = Carbon::now();
                    $destinationPath = $path.'/'.++$mytime.'.jpeg';
                    $img_project = Image::make($file);
                    $upload_success = $img_project->save($destinationPath);
                }
            }
        }
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
       // return $statuses;
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
        Like::where('status_id',$request['status_id'])->delete();
        Comment::where('status_id',$request['status_id'])->delete();
        Notification::where('status_id',$request['status_id'])->delete();
        return redirect('/status');
    }
}
