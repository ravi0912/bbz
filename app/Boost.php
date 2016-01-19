<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    protected $table = 'boosts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','skill','user_endorsed'];

    public function user1()
    {
        return $this->belongsTo('App\User', 'user_id_1');
    }

    public function user2()
    {
        return $this->belongsTo('App\User', 'user_endorsed');
    }
}
