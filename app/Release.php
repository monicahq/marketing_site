<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'released_on',
    ];

    /**
     * Get the category of this post.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    public function getPostAttribute($value)
    {
        return Markdown::convertToHtml($value);
    }
}
