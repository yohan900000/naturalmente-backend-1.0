<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\Gamme;
use Illuminate\View\View;

class GammeAdministrationController extends Controller
{
    public function index($slug): view
    {
        $gammes = Gamme::all();

        $gamme = Gamme::where('name', $slug)->firstOrFail();

        $framingTexts = $gamme->framingText()->latest()->get();
        $texts = $gamme->text()->latest()->get();
        $products = $gamme->product()->latest()->get();

        return view('administration.gammes', compact('framingTexts', 'gamme', 'texts', 'gammes', 'products'));
    }
}
