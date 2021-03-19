<?php

namespace App;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Converter;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Post extends Model implements Feedable
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

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

    public function toFeedItem(): FeedItem
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
        return self::all();
    }
}
