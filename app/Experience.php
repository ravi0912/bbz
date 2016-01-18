<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','company_name','title','location','start_month','start_year','finish_month','finish_year','working','description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
