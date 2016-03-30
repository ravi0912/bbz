<?php

namespace App\Http\Middleware;

use App\ProfileVerification;
use Closure;

class VerificationProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Auth::check()){
            $emailVerified = ProfileVerification::where('user_id',\Auth::User()->id)->pluck('email_verified');
            if($emailVerified != 1){
                if ($request->ajax()) {
                    return response('Unauthorized.', 401);
                } else {
                    return redirect('/emailVerificationNotify');
                }
            }

        }
        return $next($request);
    }
}
