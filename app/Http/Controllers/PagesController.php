<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
       // Flash::overlay('Welcome back toimprove your business !', 'Hey');
        return view('pages.home');

    }
}
