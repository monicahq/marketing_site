<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    protected $table = 'release_items';

    protected $fillable = [
        'description',
        'github_pull_request_number',
        'github_pull_request_url',
        'github_author_name',
        'github_author_url',
        'screenshot_url',
        'category',
    ];

    public function release()
    {
        return $this->belongsTo('App\Release');
    }

    public function scopeOfCategory($query, $type)
    {
        return $query->where('category', $type);
    }
}
