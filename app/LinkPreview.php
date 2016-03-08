<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkPreview extends Model
{
    protected $table = 'link_preview';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['link','meta_description','first_image','open_graph_title','open_graph_type','open_graph_image','title'];

}
