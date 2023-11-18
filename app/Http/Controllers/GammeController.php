<?php

namespace App\Http\Controllers;


use App\Models\FramingText;
use App\Models\Gamme;
use Illuminate\View\View;

class GammeController extends Controller
{
    public function index($slug): View
    {
        $gamme = Gamme::where('name', $slug)->firstOrFail();

        $framingTexts = $gamme->framingText;

        return view('public.gammes', compact('framingTexts', 'gamme'));
    }

}
