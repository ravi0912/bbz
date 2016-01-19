<?php

namespace App\Http\Controllers;

use App\Connection;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConnectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * @param Request $request
     * Sending request Connection
     * user_id_1 is sending connection request to user_id_2
     */
    public function requestConnection(Request $request){
        $count = Connection::whereUser_id_1AndUser_id_2(\Auth::User()->id, $request['user_id_2'] )->count();
        if($count < 1) {
            Connection::create([
                'user_id_1' => \Auth::User()->id,
                'user_id_2' => $request['user_id_2'],
                'connection_status' => 0,

            ]);

            if(\Auth::User()->id != $request['user_id_2'])
            {
                $notify =   \Auth::User()->name.' sent your connection request.';
                Notification::create([
                    'user_id'   => $request['user_id_2'],
                    'status_id' => 0,
                    'notification' => $notify,

                ]);
            }
        }
        return view('partials.connection',['connect' => 2, 'usr' => $request['user_id_2'], 'showprofile' => 1,'connectionNotification'=>0]);
    }

    /**
     * @param Request $request
     * Confirming request Connection
     * user_id_2 is confirming the request of user_id_1
     */
    public function confirmConnection(Request $request){
            Connection::whereUser_id_1AndUser_id_2($request['user_id_2'] ,\Auth::User()->id)->update(['connection_status' => 1]);

            //Connection Notification

        return redirect('/showprofile/'.$request['user_id_2']);
    }

    /**
     * @param Request $request
     * Removing Connection
     */
    public function removeConnection(Request $request){
        Connection::whereUser_id_1AndUser_id_2($request['user_id_2'], \Auth::User()->id )->delete();
        Connection::whereUser_id_1AndUser_id_2(\Auth::User()->id, $request['user_id_2'] )->delete();
        return redirect('/showprofile/'.$request['user_id_2']);
    }

    /**
     * @param Request $request
     * Cancel connection request from sender side
     */
    public function cancelRequestAuthUser(Request $request){
        Connection::whereUser_id_1AndUser_id_2(\Auth::User()->id, $request['user_id_2'] )->delete();
        return view('partials.connection',['connect' => 0, 'usr' => $request['user_id_2'],'showprofile' => 1,'connectionNotification'=>0]);
    }

    /**
     * Showing connection of user
     * @param $id
     */
    public function show($id){
        $user_id_1_connections = Connection::whereUser_id_1AndConnection_status($id, 1)->get();
        $user_id_2_connections = Connection::whereUser_id_2AndConnection_status($id, 1)->get();
        //return $user_id_2_connections;
        return view('connection.showConnection',['user_id_1_connections' => $user_id_1_connections, 'user_id_2_connections' => $user_id_2_connections]);
    }

    public function showConnectionRequest(){
        $user_id = \Auth::User()->id;
        $user_connection_count = Connection::whereUser_id_2AndConnection_status($user_id, 0)->count();
        $user_connection_requests = Connection::whereUser_id_2AndConnection_status($user_id, 0)->get();
        return view('partials.showConnectionRequest', ['user_connection_requests' => $user_connection_requests, 'user_connection_count' => $user_connection_count]);
    }

    //Notification Connection Request Ajax work
    /**
     * confirm connection from notification panel
     */
    public function confirmConnectionNotification(Request $request){
        Connection::whereUser_id_1AndUser_id_2($request['user_id_2'] ,\Auth::User()->id)->update(['connection_status' => 1]);
        return view('partials.connection',['connect' => 2, 'usr' => $request['user_id_2'],'showprofile' => 0,'connectionNotification'=>1]);
    }

    /**
     * confirm connection from notification panel
     */
    public function cancelConnectionNotification(Request $request){
        Connection::whereUser_id_1AndUser_id_2($request['user_id_2'] ,\Auth::User()->id)->delete();
        return view('partials.connection',['connect' => 3, 'usr' => $request['user_id_2'],'showprofile' => 0,'connectionNotification'=>1]);
    }
}
