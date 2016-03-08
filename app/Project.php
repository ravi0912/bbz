<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','name','occupation','start_month','start_year','finish_month','finish_year','url','team_members','address','description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
