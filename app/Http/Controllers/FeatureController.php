<?php

namespace App\Http\Controllers;

use App\Bylaws;
use App\Tender;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Redirect to blog
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blogs(){

        return view('pages.blogs');
    }

    /**
     * Tender
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tender(){
        $tenders = Tender::orderBy('id', 'desc')->get();
        return view('features.tender',['tenders' => $tenders]);
    }

    /**
     * byeLaws
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byelaws(){
        $bylaws = Bylaws::orderBy('id', 'desc')->get();
        return view('features.byelaws',['bylaws' => $bylaws]);
    }


}
