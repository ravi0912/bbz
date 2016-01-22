<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    protected $table = 'tenders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['city','state','link','product_category','relevant_to','title','open_date','close_date'];

}
