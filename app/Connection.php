<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $table = 'connections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id_1','user_id_2','connection_status'];

    public function user1()
    {
        return $this->belongsTo('App\User', 'user_id_1');
    }

    public function user2()
    {
        return $this->belongsTo('App\User', 'user_id_2');
    }
}
