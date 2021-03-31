<?php

namespace App\Models;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model implements Feedable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug',
        'post',
        'category_id',
        'social_media_description',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPostAttribute($value)
    {
        return Markdown::convertToHtml($value);
    }

    public function getURL()
    {
        return secure_url('blog/category/'.$this->category->slug);
    }

    /**
     * @return FeedItem
     */
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id((string) $this->id)
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
