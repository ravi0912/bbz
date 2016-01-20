<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['skill','user_id','total_users_boost'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}

