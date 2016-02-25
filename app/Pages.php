<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pages_category_id','pages_subcategory_id','type_id','name','specialities','headquarter','content','page_profile_image','page_cover_image'];

    public function page_category()
    {
        return $this->belongsTo('App\Category', 'pages_category_id');
    }


    public function page_subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'pages_subcategory_id');
    }

}
