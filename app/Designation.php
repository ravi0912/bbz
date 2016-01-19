<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    /**
     * No timestamps for a Designation
     */
    public $timestamps = false;

    protected $fillable = [
      'designation'
    ];
}
