<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','current_city','current_company','current_state','current_designation','date','month','year'];

    public function user()
    {
        return $this->hasOne('App\User');
    }

}
