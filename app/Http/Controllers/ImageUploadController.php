<?php

namespace App\Http\Controllers;



use App\Http\Requests\PrepareImageUploadRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
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
        $img_profile = Image::make($image)->resize(160*$aspectratio,160);
        $imgname = \Auth::User()->id;
        $img_thumbnail->save('uploads/thumbnails/'.$imgname.".jpeg");
        $img_profile->save('uploads/profiles/'.$imgname.".jpeg");

        //return $img->response('jpeg');
        /*Image::configure(array('driver' => 'imagick'));
        Image::make($image)->resize(300, 200);


       /* $request->file('image')->move(
            base_path() . '/public/images/uploads/', $imageName
        );*/

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
