<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GammeAdministrationController extends Controller
{
    public function index($slug)
    {
        $pages = [
            'nature_inside',
            'in_bloom',
            'sun',
            'revitalisant',
            'gentleman',
            'coiffant_finition',
            'coloration',
            'spa-cheveux',
            'couleur',
            'plante',
            'wellness'
        ];

        if (in_array($slug, $pages)) {
            return view('administration.gammes');
        }
        return redirect()->route('admin')->with('error', 'page introuvable');
    }
}
