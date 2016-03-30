<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;


class PagesController extends Controller
{

    public function home1(){
        return view('pages.home1');
    }

    public function home()
    {
       // Flash::overlay('Welcome back toimprove your business !', 'Hey');
        return view('pages.home');

    }

    /**
     * Redirect to blog
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogs(){

        return view('pages.blogs');
    }

    public function showFullBlogs1(){

        return view('pages.showFullBlogs1');
    }

    public function showFullBlogs2(){
        return view('pages.showFullBlogs2');
    }

    public function showFullBlogs3(){
        return view('pages.showFullBlogs3');
    }

    public function showFullBlogs4(){
        return view('pages.showFullBlogs4');
    }

    public function showFullBlogs5(){
        return view('pages.showFullBlogs5');
    }

    /**
     * Saving contact us
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function contactUs(Request $request)
    {
        Contactus::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message']
        ]);
        //Flash::success('Your Message is recorded successfully!');
        return redirect('/home');
    }

    public function linkpreview(){

        return view('pages.linkpreview');
    }

    public function ajaxlinkpreview(){

        return view('pages.ajaxlinkpreview');
    }

}
