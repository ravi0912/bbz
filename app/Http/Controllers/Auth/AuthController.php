<?php

namespace App\Http\Controllers\Auth;

use App\ProfileVerification;
use App\User;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\File;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /*
     * redirect upon successful registration
     */
    protected $redirectTo = 'index';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'designation'=> 'required|max:20',
            'mobile_number' => 'required|numeric|digits:10|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {



        $r =  User::create([
            'name' => $data['name'],
            'designation' => $data['designation'],
            'mobile_number' => $data['mobile_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);




        //Mail sent for verfication for 1st time user
        //Generating random token
        //saving token to database and sending it via mail
        $randomString = str_random(40);


        $user = User::where('email',$data['email'])->first();


        ProfileVerification::create([
            'user_id' => $user->id,
            'emailToken' => $randomString,
            'email_verified' => 0,
            'attempt_email_verified' => 0,
            'contact_number_otp' => 0,
            'contact_number_verified' => 0,
            'attempt_contact_number_verified'=> 0


        ]);
        $data = $user;
        $data = array_add($data, 'token', $randomString);
        Mail::send('emails.welcome', array('data'=>$data),function ($message) use ($user) {
            $message->to($user->email,$user->name)->subject('Welcome to Buildblockz.com');
        });

        return $r;

    }

}
