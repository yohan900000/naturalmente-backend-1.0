<?php

namespace App\Http\Controllers;

class GammeController extends Controller
{
    public function index($slug)
    {
        $pages = ['nature_inside', 'in_bloom', 'sun', 'revitalisant', 'coiffant_finition', 'gentleman', 'couleur', 'plante', 'wellness'];

        if (in_array($slug, $pages)) {
            return view('gammes');
        }

        return view('index')->with('error', 'page introuvable');
    }
}
