<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function executeSearch(Request $request)
    {
        $keywords = $request['keywords'];
        $searchResults = User::where('name', 'LIKE', "%$keywords%")->count();
        if($searchResults > 0) {
            $searchs = User::where('name', 'LIKE', "%$keywords%")->get();
            return view('partials.searchs', ['searchs' => $searchs,'searchResults' => $searchResults]);
        }
    }

    public function searchResults(Request $request)
    {
        $keywords = $request['keywords'];
        $searchResults = User::where('name', 'LIKE', "%$keywords%")->count();
        if($searchResults > 0) {
            $searchs = User::where('name', 'LIKE', "%$keywords%")->get();
            return view('partials.searchresults', ['searchs' => $searchs,'searchResults' => $searchResults]);
        }else{
            $searchs = 0;
            return view('partials.searchresults', ['searchs' => $searchs,'searchResults' => $searchResults]);
        }
    }
}
