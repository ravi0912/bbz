<?php

namespace App\Http\Controllers;

use App\Connection;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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


            //Send Mail for Connection Request

            $data = User::whereId($request['user_id_2'])->first();
            Mail::send('emails.connectionRequest',array('data'=>$data), function ($message) use ($data) {
                $message->to($data->email,$data->name)->subject('Connection Request');
            });

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
        //Send Mail for Connection Confirm

        $data = User::whereId($request['user_id_2'])->first();
        Mail::send('emails.connectionConfirm',array('data'=>$data), function ($message) use ($data) {
            $message->to($data->email,$data->name)->subject('Connection Accepted');
        });

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
        //return $user_id_1_connections;
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


        //Send Mail for Connection Confirm


        $user = User::whereId($request['user_id_2'])->first();
        Mail::send('emails.connectionRequest',$user, function ($message) use ($user) {
            $message->to($user->email,$user->name)->subject('Connection Request');
        });
        return view('partials.connection',['connect' => 2, 'usr' => $request['user_id_2'],'showprofile' => 0,'connectionNotification'=>1]);
    }

    /**
     * confirm connection from notification panel
     */
    public function cancelConnectionNotification(Request $request){
        Connection::whereUser_id_1AndUser_id_2($request['user_id_2'] ,\Auth::User()->id)->delete();
        return view('partials.connection',['connect' => 3, 'usr' => $request['user_id_2'],'showprofile' => 0,'connectionNotification'=>1]);
    }

    /**
     * 5 People you may know
     * @return mixed
     */
    public function peopleMayKnow(){
        $user_id_1_connections = Connection::whereUser_id_1AndConnection_status(\Auth::User()->id, 1)->select('user_id_2')->get();
        $user_id_2_connections = Connection::whereUser_id_2AndConnection_status(\Auth::User()->id, 1)->select('user_id_1')->get();
        $result = array_merge($user_id_1_connections->toArray(), $user_id_2_connections->toArray());
        $peopleMayKnow = User::whereNotIn('id', $result)->take(5)->get();
        return $peopleMayKnow;
    }

    /**
     * All People you may know
     * @return mixed
     */
    public function allPeopleMayKnow(){
        $user_id_1_connections = Connection::whereUser_id_1AndConnection_status(\Auth::User()->id, 1)->select('user_id_2')->get();
        $user_id_2_connections = Connection::whereUser_id_2AndConnection_status(\Auth::User()->id, 1)->select('user_id_1')->get();
        $result = array_merge($user_id_1_connections->toArray(), $user_id_2_connections->toArray());
        $peopleMayKnow = User::whereNotIn('id', $result)->get();
        return $peopleMayKnow;
    }
}
