<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    protected $table = 'release_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'description',
        'github_pull_request_number',
        'github_pull_request_url',
        'github_author_name',
        'github_author_url',
        'screenshot_url',
        'category',
    ];

    /**
     * @return BelongsTo
     */
    public function release()
    {
        return $this->belongsTo(Release::class);
    }

    /**
     * Filter category type.
     *
     * @param Builder $query
     * @param string $type
     * @return Builder
     */
    public function scopeOfCategory(Builder $query, string $type): Builder
    {
        return $query->where('category', $type);
    }
}
