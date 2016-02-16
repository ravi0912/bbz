<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageAdmins extends Model
{
    protected $table = 'page_admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['page_id','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function page()
    {
        return $this->belongsTo('App\Pages');
    }
}
