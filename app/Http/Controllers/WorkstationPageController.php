<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Http\Requests\PreparePageMakeRequest;
use App\Http\Requests\PrepareStatusRequest;
use App\Like;
use App\PageAdmins;
use App\Pages;
use App\Status;
use App\Subcategory;
use App\Type;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkstationPageController extends Controller
{

    /**
     * Create a new Status controller instance.
     *
     * @return void
     */
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
            'page_profile_image' => null,
            'page_cover_image' => null,
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
        return view('workstationPage.createPagePopupForm', ['subcategory' => $subcategory,'type' => $type,'page_category_id' => $request['id']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = false;
        if($files !== false){
            $photo = 1;//error
        }else{
            $photo = 0;
        }
        Status::create([
            'user_id' => \Auth::User()->id,
            'body' => $request['body'],
            'page_id' => $request['page_id'],
            'photo' => $photo,
            '$video' => 0
        ]);


        $file_count = count($files);
        if($files !== false){
            $statuses = Status::where('user_id',\Auth::User()->id)->orderBy('updated_at', 'desc')->first();
            $status_id = $statuses->id;
            $pathAuth = public_path('uploads/statuses/'.\Auth::User()->id);
            File::makeDirectory($pathAuth, $mode = 0777, true, true);
            $path = public_path('uploads/statuses/'.\Auth::User()->id.'/'.$status_id);
            File::makeDirectory($path, $mode = 0777, true, true);

            $uploadcount = 0;
            foreach($files as $file) {
                $rules = array('file' => 'required|mimes:png,gif,jpeg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $mytime = Carbon::now();
                    $destinationPath = $path.'/'.++$mytime.'.jpeg';
                    $img_project = Image::make($file);
                    $upload_success = $img_project->save($destinationPath);
                }
            }
        }
        return redirect('/showPage/'.$request['page_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Pages::where('id',$id)->first();
        $pageAdmin = PageAdmins::where('page_id',$id)->first();
        $statuses = Status::orderBy('created_at', 'desc')->get();
        $statusCount = Status::orderBy('created_at', 'desc')->count();
        if($statusCount > 0){
            foreach($statuses as $status){
                $likes[$status->id] =  Like::where('status_id', $status->id)->count();
                $liked[$status->id] =  Like::whereStatus_idAndUser_id($status->id, \Auth::User()->id )->count();
                $countComment[$status->id] = Comment::where('status_id',$status->id)->count();
            }
        }else{
            $likes =0;
            $liked = 0;
            $countComment = 0;
        }

        //return $statuses;
        return view('workstationPage.showPage',['page' => $page, 'pageAdmin' => $pageAdmin,'statuses' => $statuses,'likes' => $likes,'liked'  => $liked,'countComment' => $countComment]);

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
