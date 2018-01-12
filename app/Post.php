<?php

namespace App;

use League\CommonMark\Converter;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the category of this post.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getPostAttribute($value)
    {
        return Markdown::convertToHtml($value);
    }
}
