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
    protected $fillable = ['city','state','description','ownership','industry','issuing_authority','estimated_value','link','product_category','title','open_date','close_date'];

}
