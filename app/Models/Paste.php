<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    protected $fillable = [
        'slug',
        'content',
        'expires_at',
    ];

    protected $dates = [
        'expires_at',
        'created_at',
        'updated_at',
    ];

    // event
    public static function boot()
    {
        parent::boot();

        self::creating(function($paste) {
            $paste->slug = str_random(8); // @TODO generate better slug
        });
    }
}
