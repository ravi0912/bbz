<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;

use App\Notification;
use Illuminate\Http\Request;

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
            $notify =   \Auth::User()->name.' commented on your post.';
            Notification::create([
                'user_id'   => $user_id,
                'user_id_2' => \Auth::User()->id,
                'status_id' => $status_id,
                'notification' => $notify,

            ]);
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
                'notification' => $notify,

            ]);
        }
        $likes =  Like::where('status_id', $status_id)->count();
        return view('partials.like', ['likes' => $likes,'liked' => $liked]);
    }
}
