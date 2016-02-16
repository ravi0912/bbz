<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'page_types';

    protected $fillable = ['page_category_id','page_type'];
}
