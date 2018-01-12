<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     * Get the posts with that category.
     */
    public function posts()
    {
        return $this->hasMany('App\Post', 'category_id')->orderBy('created_at', 'desc');;
    }
}
