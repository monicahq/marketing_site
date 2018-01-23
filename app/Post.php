<?php

namespace App;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use League\CommonMark\Converter;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Feedable
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

    public function getURL()
    {
        return secure_url('blog/category/'.$this->category->slug);
    }

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->post)
            ->updated($this->created_at)
            ->author('Regis Freyd')
            ->link($this->getUrl());
    }

    public static function getFeedItems()
    {
       return Post::all();
    }
}
