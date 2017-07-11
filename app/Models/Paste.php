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

        self::saving(function($paste) {
            $paste->expires_at = \Carbon\Carbon::now()->addDays(15);
        });

        self::creating(function($paste) {
            $slug = '';
            $slugExists = true;
            $maxTries = 5;

            while($slugExists && $maxTries >= 0) {
                $slug = str_random(8);

                if(self::where('slug', $slug)->count() <= 0) {
                    $slugExists = false;
                }

                $maxTries -= 1;
            }

            if($maxTries < 0) {
                throw new \Exception('Max Tries Hit');
            }

            $paste->slug = $slug;
        });
    }
}
