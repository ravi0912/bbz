<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PreparePageMakeRequest;
use App\PageAdmins;
use App\Pages;
use App\Subcategory;
use App\Type;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkstationPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( PreparePageMakeRequest $request)
    {
        Pages::create([
            'pages_category_id'   => $request['pages_category_id'],
            'pages_subcategory_id' => $request['pages_subcategory_id'],
            'type_id' => $request['type_id'],
            'name' => $request['name'],
            'specialities' => $request['specialities'],
            'headquarter' => $request['headquarter'],
            'content' => $request['content'],
            'page_profile_image' => 0,
            'page_cover_image' => 0,
        ]);

        $pagename = Pages::where('name',$request['name'])->first();
        PageAdmins::create([
            'page_id'   => $pagename->id,
            'user_id' => \Auth::User()->id ,

        ]);

        return redirect('/showPage/'.$pagename->id);
    }

    public function createPageForm()
    {
        $category = Category::get();
        return view('workstationPage.createPage', ['category' => $category,]);
    }

    public function showCreatePageForm(Request $request)
    {

        $subcategory = Subcategory::where('page_category_id',$request['id'])->get();
        $type = Type::where('page_category_id',$request['id'])->get();
        return view('workstationPage.createPagePopupForm', ['subcategory' => $subcategory,'type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
