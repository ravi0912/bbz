<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileVerification extends Model
{
    protected $table = 'profile_verification';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','emailToken','email_verified','attempt_email_verified','contact_number_otp','contact_number_verified','attempt_contact_number_verified'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
