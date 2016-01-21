<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bylaws extends Model
{
    protected $table = 'bylaws';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['city','link','issuing_authority','description'];
}
