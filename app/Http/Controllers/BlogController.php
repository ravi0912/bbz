<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use File;

use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('pages.blog',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function blogForm()
    {
        return view('adminAuth.addBlog');
    }

    public function store(Request $request)
    {
        $files = Input::file('images');
        Blog::create([
            'heading' => $request['heading'],
            'body' => $request['body']
        ]);

        $file_count = count($files);
        if($files !== false){
            $blog = Blog::orderBy('updated_at', 'desc')->first();

            $pathAuth = public_path('uploads/blogs/'.$blog->id);
            File::makeDirectory($pathAuth, $mode = 0777, true, true);

            $uploadcount = 0;
            $i=0;
            foreach($files as $file) {
                $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg,JPG,GIF,PNG,JPEG'); //'required|mimes:png,gif,jpeg,'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $destinationPath = $pathAuth.'/'.++$i.'.jpeg';
                    $img_blog = Image::make($file);
                    $upload_success = $img_blog->save($destinationPath);
                }
            }
        }
        return view('adminAuth.addBlog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::where('id',$id)->first();
        return view('pages.showBlog',['blog' => $blog]);
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
