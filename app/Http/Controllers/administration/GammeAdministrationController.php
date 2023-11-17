<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\FramingText;
use App\Models\Gamme;
use Illuminate\Http\Request;

class GammeAdministrationController extends Controller
{
    public function index($slug)
    {
        $gamme = Gamme::where('name', $slug)->firstOrFail();

        $framingTexts = FramingText::where('gamme_id', $gamme->id)->get();

        return view('administration.gammes', compact('framingTexts', 'gamme'));
    }
}
