<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;

use App\Notification;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function executeComment(Request $request)
    {
        $status_id    = $request['status_id'];
        $comment_body = $request['comment_body'];
        //Notifiction to show in whose user id
        $user_id = $request['user_id'];
        Comment::create([
            'user_id'   => \Auth::User()->id,
            'status_id' => $status_id,
            'body'      => $comment_body,

        ]);

        if(\Auth::User()->id != $user_id)
        {
            $page_id = $request['page_id'];
            if($page_id){
                $notify =   \Auth::User()->name.' commented on your post in '.$request['page_name'];
            }else{
                $notify =   \Auth::User()->name.' commented on your post.';
            }

            Notification::create([
                'user_id'   => $user_id,
                'user_id_2' => \Auth::User()->id,
                'status_id' => $status_id,
                'pages_id' => $page_id,
                'group_id' => 0,
                'skill_id' => 0,
                'viewed_profile_id' => 0,
                'notification' => $notify,
            ]);

            //Send Mail for Comments to user_id
            $data = Status::whereId($status_id)->first();
            $data = array_add($data, 'comment', $comment_body);
            $data = array_add($data, 'notify', $notify);

            $user = User::whereId($user_id)->first();
            $data = array_add($data, 'name',$user->name);
            Mail::send('emails.commentLike', array('data'=>$data),function ($message) use ($user) {
                $message->to($user->email,$user->name)->subject('Comment in your Status');
            });
        }



        $comments = Comment::where('status_id', $status_id)->get();
        return view('partials.comment', ['comments' => $comments]);
    }

    public function showComment(Request $request)
    {
        $status_id    = $request['status_id'];
        $comments = Comment::where('status_id', $status_id)->get();
        return view('partials.comment', ['comments' => $comments]);
    }

    public function executeLike(Request $request)
    {
        $status_id    = $request['status_id'];
        $like =  Like::whereStatus_idAndUser_id($status_id, \Auth::User()->id )->count();
        if($like == 1) {
            Like::whereStatus_idAndUser_id($status_id, \Auth::User()->id )->delete();
            $liked =  0;
        }else{
            Like::create([
                'user_id' => \Auth::User()->id,
                'status_id' => $status_id,

            ]);
            $liked =  1;
        }
        $user_id = $request['user_id'];
        if(\Auth::User()->id != $user_id)
        {
            $notify =   \Auth::User()->name.' liked your post.';
            Notification::create([
                'user_id'   => $user_id,
                'user_id_2' => \Auth::User()->id,
                'status_id' => $status_id,
                'pages_id' => 0,
                'group_id' => 0,
                'skill_id' => 0,
                'viewed_profile_id' => 0,
                'notification' => $notify,

            ]);

            //Send Mail for Comments to user_id
            $data = Status::whereId($status_id)->first();


            $data = array_add($data, 'comment', '');
            $data = array_add($data, 'notify', $notify);
            $user = User::whereId($user_id)->first();
            $data = array_add($data, 'name',$user->name);
            Mail::send('emails.commentLike',  array('data'=>$data),function ($message) use ($user) {
                $message->to($user->email,$user->name)->subject('Likes in your Status');
            });
        }
        $likes =  Like::where('status_id', $status_id)->count();
        return view('partials.like', ['likes' => $likes,'liked' => $liked,'status_id'=> $status_id,'user_id'=>$user_id,]);
    }
}
