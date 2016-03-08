<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','user_id_2','status_id','pages_id','group_id','skill_id','viewed_profile_id','notification'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
