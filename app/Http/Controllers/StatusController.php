<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\LinkPreview;
use App\LinkPreviewRelation;
use App\Notification;
use App\Status;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\PrepareStatusRequest;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Validator;
use Session;
use File;
use App\MetaParser;

class StatusController extends Controller
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
     * Display a listing of the status.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Default image saving

        if (!file_exists("uploads/profiles/".\Auth::User()->id.".jpeg")) {
                $image ="uploads/profiles/default.jpg";
                $size = getimagesize($image);
                $aspectratio = $size[0]/$size[1];
                $img_thumbnail = Image::make($image)->resize(30*$aspectratio,30);
                $img_profile = Image::make($image)->resize(200*$aspectratio,200);
                $imgname = \Auth::User()->id;
                $path_thumbnail = public_path('uploads/thumbnails/'.$imgname.".jpeg");
                $path_profile = public_path('uploads/profiles/'.$imgname.".jpeg");
                $img_thumbnail->save($path_thumbnail);
                $img_profile->save($path_profile);

            //Mail for Welcome
            $data=[];
            $user = \Auth::User();
            Mail::send('emails.welcome', $data,function ($message) use ($user) {
                $message->to($user->email,$user->name)->subject('Welcome to Buildblockz.com');
            });
        }


        $statuses = Status::orderBy('created_at', 'desc')->get();
        $statusCount = Status::orderBy('created_at', 'desc')->count();
        $linkpreviewtitle = ['0' => null];
        $linkpreviewimage = ['0' => null];
        $linkpreviewdescription = ['0' => null];
        $linkpreviewexist = ['0' => null];

        if($statusCount > 0){
            foreach($statuses as $status){
                $likes[$status->id] =  Like::where('status_id', $status->id)->count();
                $liked[$status->id] =  Like::whereStatus_idAndUser_id($status->id, \Auth::User()->id )->count();
                $countComment[$status->id] = Comment::where('status_id',$status->id)->count();
                if($status->link_preview == 1){
                    $linkview = LinkPreviewRelation::where('status_id',$status->id)->first();

                    if(empty($linkview->linkpreview1['open_graph_title'])){
                        if(!empty($linkview->linkpreview1['title'])){
                            $linkpreviewtitle = array_add($linkpreviewtitle, $status->id, $linkview->linkpreview1['title']);
                        }
                    }else{
                        $linkpreviewtitle = array_add($linkpreviewtitle, $status->id, $linkview->linkpreview1->open_graph_title);
                    }
                    if(empty($linkview->linkpreview1['open_graph_image'])){
                        if(!empty($linkview->linkpreview1['first_image'])) {
                            $linkpreviewimage = array_add($linkpreviewimage, $status->id, $linkview->linkpreview1['first_image']);
                        }
                    }else{
                        $linkpreviewimage = array_add($linkpreviewimage, $status->id, $linkview->linkpreview1->open_graph_image);
                    }
                    if(!empty($linkview->linkpreview1['meta_description'])) {
                        $linkpreviewdescription = array_add($linkpreviewdescription, $status->id, $linkview->linkpreview1['meta_description']);
                    }else{
                        $linkpreviewdescription = array_add($linkpreviewdescription, $status->id, 0);
                    }
                    if(empty($linkview->linkpreview1['open_graph_image']) && empty($linkview->linkpreview1['meta_description']) && empty($linkview->linkpreview1['open_graph_title'])){
                        $linkpreviewexist = array_add($linkpreviewexist, $status->id, 0);
                    }else{
                        $linkpreviewexist = array_add($linkpreviewexist, $status->id, 1);
                    }

                }
            }
        }else{
            $likes =0;
            $liked = 0;
            $countComment = 0;
        }


        return view('status.index', ['statuses' => $statuses,'likes' => $likes,'liked'  => $liked,'countComment' => $countComment,'linkpreviewtitle' => $linkpreviewtitle,'linkpreviewimage' => $linkpreviewimage, 'linkpreviewdescription' => $linkpreviewdescription, 'linkpreviewexist' => $linkpreviewexist]);
    }

    /**
     * Show the form for creating a new status.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PrepareStatusRequest $request)
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrepareStatusRequest $request)
    {

        /*$files = Input::file('images');*/
        $files=0;
        if($files[0] != NULL){
            $photo = 1;
        }else{
            $photo = 0;
        }

        //Parse status body to find 1st Link
        //$url containing the 1st url
        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        $text = $request['body'];
        $text = str_replace( "www.", "http://www.", $text );
        $text = str_replace( "http://http://www.", "http://www.", $text );
        $text = str_replace( "https://http://www.", "https://www.", $text );
        $no_of_url =  preg_match_all($reg_exUrl, $text, $matches);
        //$url = $matches[0][0];

        if($no_of_url != 0){
            $link_preview = 1;
            $url = $matches[0][0];
        }else{
            $link_preview = 0;
        }
        //Status Create
       Status::create([
            'user_id' => \Auth::User()->id,
            'body' => $request['body'],
            'post_as_admin_page' => 0,
            'page_id' => null,
            'photo' => $photo,
            'video' => 0,
            'link_preview' => $link_preview
        ]);
        $statuses = Status::where('user_id',\Auth::User()->id)->orderBy('updated_at', 'desc')->first();


        //Parseing the page and storing in table


        if($no_of_url != 0){

            $body = @file_get_contents($url);
            $parser = (new MetaParser($body, $url));
            $data = $parser->getDetails();

            //return $data;
            $url_count = LinkPreview::where('link',$url)->count();
            if($url_count == 0){
                LinkPreview::create([
                    'link' => $url,
                    'meta_description' => array_key_exists('description', $data['meta'])?$data['meta']['description'] : NULL,
                    'first_image' => array_key_exists(0, $data['images'])?$data['images'][0] : NULL,
                    'open_graph_title' => array_key_exists('title', $data['openGraph'])?$data['openGraph']['title']: NULL,
                    'open_graph_type' => array_key_exists('type', $data['openGraph'])?$data['openGraph']['type'] : NULL,
                    'open_graph_image' => array_key_exists('image', $data['openGraph'])?$data['openGraph']['image'] : NULL,
                    'title' => array_key_exists('title', $data)?$data['title'] : NULL,
                ]);

                $url_get_id = LinkPreview::where('link',$url)->first();
                LinkPreviewRelation::create([
                    'status_id' => $statuses->id,
                    'comment_id' => 0,
                    'mail_id' => 0,
                    'link_preview_id' => $url_get_id->id,
                ]);
            }else{
                LinkPreview::where('link',$url)->update([
                    'meta_description' => array_key_exists('description', $data['meta'])?$data['meta']['description'] : NULL,
                    'first_image' => array_key_exists(0, $data['images'])?$data['images'][0] : NULL,
                    'open_graph_title' => array_key_exists('title', $data['openGraph'])?$data['openGraph']['title']: NULL,
                    'open_graph_type' => array_key_exists('type', $data['openGraph'])?$data['openGraph']['type'] : NULL,
                    'open_graph_image' => array_key_exists('image', $data['openGraph'])?$data['openGraph']['image'] : NULL,
                    'title' => array_key_exists('title', $data)?$data['title'] : NULL,
                ]);
                $url_get_id = LinkPreview::where('link',$url)->first();

                    LinkPreviewRelation::create([
                    'status_id' => $statuses->id,
                    'comment_id' => 0,
                    'mail_id' => 0,
                    'link_preview_id' => $url_get_id->id,
                ]);
            }

        }





        //Saving Images in uploads/statuses folder

        $file_count = count($files);
        if($files[0] != NULL){
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
                    $destinationPath = $path.'/'.$mytime.'_'.$string = str_random(40).'.jpeg';
                    $img_project = Image::make($file);
                    $upload_success = $img_project->save($destinationPath);
                }
            }
        }
        return redirect('/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statuses = Status::where('id', $id)->get();
        $likes =  Like::where('status_id', $id)->count();
        $liked =  Like::whereStatus_idAndUser_id($id, \Auth::User()->id )->count();
       // return $statuses;
        return view('status.showStatus', ['statuses' => $statuses,'likes' => $likes,'liked'  => $liked]);
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
    public function destroy(Request $request)
    {
        Status::where('id',$request['status_id'])->delete();
        Like::where('status_id',$request['status_id'])->delete();
        Comment::where('status_id',$request['status_id'])->delete();
        Notification::where('status_id',$request['status_id'])->delete();
        return redirect('/status');
    }
}
