<?php

namespace App\Repositories;

use App\Models\Paste;

class PasteRepository
{

    public function new()
    {
      session()->forget('paste.id');

      $this->create();
    }

    public function create()
    {
        $paste = [];

        if(session()->has('paste.id')) {
            $paste = Paste::find(session()->get('paste.id'));
        } else {
            $paste = Paste::create([
                'content' => '',
                'expires_at' => \Carbon\Carbon::now()->addDays(2),
            ]);

            session()->put('paste.id', $paste->id);
        }

        return $paste;
    }

}