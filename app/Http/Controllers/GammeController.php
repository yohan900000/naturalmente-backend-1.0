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
        $texts = $gamme->text;
        $products = $gamme->product;
        $pictures = $gamme->picture;

        return view('public.gammes', compact('framingTexts', 'gamme', 'texts', 'products', 'pictures'));
    }

}
$user = App\Models\User::create([
    'name' => 'administrateur',
    'email' => 'admin@admin.fr',
    'password' => bcrypt('admin'),
]);
