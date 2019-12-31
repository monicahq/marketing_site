<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Release extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'released_on',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }
}
