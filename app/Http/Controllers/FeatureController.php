<?php

namespace App\Http\Controllers;

use App\Bylaws;
use App\Tender;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function blogs(){

        return view('pages.blogs');
    }

    public function tender(){
        $tender = Tender::orderBy('id', 'desc')->get();
        return view('features.tender');
    }

    public function byelaws(){
        $bylaws = Bylaws::orderBy('id', 'desc')->get();
        return view('features.byelaws',['bylaws' => $bylaws]);
    }


}
