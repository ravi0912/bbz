<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{


    protected $table = 'statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','body','photo','video'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
