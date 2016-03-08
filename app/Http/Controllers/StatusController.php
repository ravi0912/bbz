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


        return view('status.index', ['statuses' => $statuses,'likes' => $likes,'liked'  => $liked,'countComment' => $countComment]);
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

        $files = Input::file('images');
        //$files = false;
        if($files !== false){
            $photo = 1;//error
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
        preg_match_all($reg_exUrl, $text, $matches);
        $url = $matches[0][0];

        if($url != ''){
            $link_preview = 1;
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
        $body = file_get_contents($url);
        $parser = (new MetaParser($body, $url));
        $data = $parser->getDetails();
        $data['favicon'];

        $url_count = LinkPreview::where('link',$url)->count();
        if($url_count == 0){
            LinkPreview::create([
                'link' => $url,
                'meta_description' => $data['meta']['description'],
                'first_image' => $data['images'][0],
                'open_graph_title' => $data['openGraph']['title'],
                'open_graph_type' => $data['openGraph']['type'],
                'open_graph_image' => $data['openGraph']['image'],
                'title' => $data['title'],
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
                'meta_description' => $data['meta']['description'],
                'first_image' => $data['images'][0],
                'open_graph_title' => $data['openGraph']['title'],
                'open_graph_type' => $data['openGraph']['type'],
                'open_graph_image' => $data['openGraph']['image'],
                'title' => $data['title'],
            ]);
            $url_get_id = LinkPreview::where('link',$url)->first();
            LinkPreviewRelation::create([
                'status_id' => $statuses->id,
                'comment_id' => 0,
                'mail_id' => 0,
                'link_preview_id' => $url_get_id->id,
            ]);
        }


        //Saving Images in uploads/statuses folder

        $file_count = count($files);
        if($files !== false){
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
