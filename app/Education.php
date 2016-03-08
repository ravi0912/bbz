<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','school','start_month','start_year','finish_month','finish_year','degree','branch','grade','experience','description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
