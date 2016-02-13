<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use TomLingham\Searchy\Facades\Searchy;

class SearchController extends Controller
{
    public function executeSearch(Request $request)
    {
        $keywords = $request['keywords'];
        $keywords = $request['keywords'];
        $searchs = Searchy::driver('fuzzy')->search('users')->fields('name', 'email')->query($keywords)->get();
        return view('partials.searchs', ['searchs' => $searchs]);

    }

    public function searchResults(Request $request)
    {
        $keywords = $request['keywords'];
        $searchs = Searchy::driver('fuzzy')->search('users')->fields('name', 'email')->query($keywords)->get();
            return view('partials.searchresults', ['searchs' => $searchs]);
    }
}
