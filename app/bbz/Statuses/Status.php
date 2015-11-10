<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * Fillable field for statuses
     *
     * @var array
     */

    protected $fillable = ['body'];
}
