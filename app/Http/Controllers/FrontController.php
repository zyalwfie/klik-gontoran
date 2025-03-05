<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->get();
        $heroPhoto = null;
        $aboutPhoto = null;

        if ($photos->count() > 0) {
            $heroPhoto = $photos->first();
        }

        if ($photos->count() > 1) {
            $aboutPhoto = $photos->skip(1)->first();
        }

        return view('welcome', compact('photos', 'heroPhoto', 'aboutPhoto'));
    }
}
