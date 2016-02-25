<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['heading','body'];
}
