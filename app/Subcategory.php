<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'page_subcategory';

    protected $fillable = [
        'page_category_id', 'page_subcategory'
    ];
}
