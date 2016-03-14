<?php

namespace App\Http\Controllers;

use App\ProfileVerification;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ProfileVerificationController extends Controller
{
    /**
     * Email verification redirect page if not verfified
     * Blade file in profile directory
     */
    public function emailVerificationNotify(){

        $emailVerification = ProfileVerification::where('user_id',\Auth::User()->id)->pluck('email_verified');
        //return $emailVerification;
        if($emailVerification != 1){
            return view('profile.emailVerificationNotify');
        }else{
            return redirect('/status');
        }
    }

    /**
     * Email verification done here
     */
    public function emailVerification(Request $request){
        $emailVerification = ProfileVerification::where('user_id',$request['id'])->first();
        if($emailVerification->email_verified != 1){
            if($emailVerification->attempt_email_verified <= 3){
                if($emailVerification->attempt_email_verified == 3){
                    //Security reason more than required attempt User Delete
                    //return 1;
                    return redirect('/home');
                }else{
                    //Update attempt user verification
                    //check email token
                    if($emailVerification->emailToken == $request['token']){
                        //Update user verified
                        //return 2;
                        ProfileVerification::where('user_id' ,$request['id'])->update(['email_verified' => 1]);
                        return redirect('/status');
                    }else{
                        //Unsuccessful attempt
                        //return 3;
                        $i = $emailVerification->attempt_email_verified + 1;
                        ProfileVerification::where('user_id' ,$request['id'])->update(['attempt_email_verified' => $i]);
                        return redirect('/home');
                    }

                }

            }else{
                //return 4;
                return  redirect('/home');
            }
        }else{
            return redirect('/status');
        }
    }

    /**
     * Email verification regenerate
     */
    public function emailVerificationRegenerate(){
        $emailVerification = ProfileVerification::where('user_id',\Auth::User()->id)->pluck('email_verified');
        if($emailVerification != 1){
            $data=[];
            $data = $user = \Auth::User();
            $randomString = str_random(40);
            ProfileVerification::where('user_id',\Auth::User()->id)->update([
                'emailToken' => $randomString,
                'email_verified' => 0,
                'attempt_email_verified' => 0,
            ]);
            $data = array_add($data, 'token', $randomString);
            Mail::send('emails.welcome', array('data'=>$data),function ($message) use ($user) {
                $message->to($user->email,$user->name)->subject('Welcome to Buildblockz.com');
            });
            return redirect('/emailVerificationNotify');
        }else{
            return redirect('/status');
        }
    }
}
