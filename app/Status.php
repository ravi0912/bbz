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
    protected $fillable = ['user_id','body','page_id','post_as_admin_page','photo','video'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function page()
    {
        return $this->belongsTo('App\Pages');
    }

}
