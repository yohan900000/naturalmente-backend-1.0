<?php

namespace App\Http\Controllers;


use App\Models\FramingText;
use App\Models\Gamme;

class GammeController extends Controller
{
    public function index($slug)
    {
        $gamme = Gamme::where('name', $slug)->firstOrFail();

        $framingTexts = FramingText::where('gamme_id', $gamme->id)->get();

        return view('public.gammes', compact('framingTexts', 'gamme'));
    }
}
