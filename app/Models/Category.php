<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';

    /**
     * Get the posts with that category.
     *
     * @return HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id')
            ->orderBy('created_at', 'desc');
    }
}
