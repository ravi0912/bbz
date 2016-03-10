<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkPreviewRelation extends Model
{
    protected $table = 'link_preview_relation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['status_id','comment_id','mail_id','link_preview_id'];

    public function linkpreview1()
    {
        return $this->belongsTo('App\LinkPreview', 'link_preview_id');
    }
}
