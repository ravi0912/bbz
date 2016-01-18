<?php

namespace App\Http\Controllers;

use App\Notification;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showNotification(Request $request)
    {
        $user_id = \Auth::User()->id;
        $no_notifications = Notification::where('user_id', $user_id)->count();
        $notifications = Notification::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        return view('partials.notification', ['notifications' => $notifications,'no_notifications' => $no_notifications]);

    }


}
