<?php

namespace App\Http\Controllers;

use App\Models\Paste;
use Illuminate\Http\Request;
use Facades\App\Repositories\PasteRepository;

class PasteController extends Controller
{

    public function create()
    {
        $paste = PasteRepository::create();

        return view('create',  [
            'paste' => $paste,
        ]);
    }

    public function store()
    {
        // either return an instance of the paste model
        // or create a new instance
        $paste = PasteRepository::create();

        // update content
        $paste->content = request('code');
        $paste->save();

        return redirect()->route('home')->with('success', 'The paste was saved successfully.');
    }

    public function view($slug)
    {
        $paste = Paste::where('slug', str_slug($slug))->first();

        if(! $paste) {
            return 'No paste found';
        }

        return view('view', compact('paste'));
    }

    public function destroy()
    {

    }
}
