<?php

namespace App\Http\Controllers;



use App\Http\Requests\PrepareImageUploadRequest;
use App\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use Session;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ImageUploadController extends Controller
{

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
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProfileImage(PrepareImageUploadRequest $request)
    {
        $image = $request->file('image');
        $size = getimagesize($image);
        $aspectratio = $size[0]/$size[1];
        $img_thumbnail = Image::make($image)->resize(30*$aspectratio,30);
        $img_profile = Image::make($image)->resize(800*$aspectratio,800);
        $imgname = Carbon::now();
        $path_thumbnail = public_path('uploads/thumbnails/'.$imgname.".jpeg");
        $path_profile = public_path('uploads/profiles/'.$imgname.".jpeg");
        $img_thumbnail->save($path_thumbnail);
        $img_profile->save($path_profile);

        /*$count = Profile::where('id', \Auth::User()->id)->count();
        if($count == 0)
        {
            Profile::create([
                'user_id'             =>   \Auth::User()->id,
                'current_company'     =>   '',
                'current_city'        =>   '',
                'current_state'       =>   '',
                'current_designation' =>   '',
                'date'                =>   '',
                'month'               =>   '',
                'year'                =>   '',
                'current_profile_image'=>  $imgname,
                'current_cover_image' =>   '',

            ]);
        }else{
            Profile::where('id', \Auth::User()->id)->update([
                'current_profile_image'=>  $imgname,
            ]);
        }*/

       return redirect('/profile');
    }

    public function storeProjectImage(Request $request)
    {
        $files = Input::file('images');
        $file_count = count($files);
        $pathAuth = public_path('uploads/projects/'.\Auth::User()->id);
        File::makeDirectory($pathAuth, $mode = 0777, true, true);
        $path = public_path('uploads/projects/'.\Auth::User()->id.'/'.$request['project_id']);
        File::makeDirectory($path, $mode = 0777, true, true);

        $uploadcount = 0;
        $mytime = Carbon::now();
        foreach($files as $file) {
            $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg,JPG,GIF,PNG,JPEG'); //'required|mimes:png,gif,jpeg,'
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $mytime = Carbon::now();
                $destinationPath = $path.'/'.$mytime.'_'.$string = str_random(40).'.jpeg';
                $img_project = Image::make($file);
                $upload_success = $img_project->save($destinationPath);
            }
        }
        if($uploadcount == $file_count){
            Session::flash('success', 'Upload successfully');
            return redirect('/profile');
        }
        else {
            return redirect('/profile')->withInput()->withErrors($validator);
        }

        //return redirect('/profile');
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
