<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    protected $table = 'boosts';

    /**
     * The attributes that are mass assignable.
     *user_id_1 is Auth->User
     * user_id_2 who endorsed in skill
     * @var array
     */
    protected $fillable = ['skill_id','user_id_1','user_id_2'];

    public function user1()
    {
        return $this->belongsTo('App\User', 'user_id_1');
    }

    public function user2()
    {
        return $this->belongsTo('App\User', 'user_id_2');
    }

    public function skill()
    {
        return $this->belongsTo('App\Skill', 'skill_id');
    }
}
