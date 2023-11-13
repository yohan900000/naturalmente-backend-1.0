<?php

namespace App\Http\Controllers;

class GammeController extends Controller
{
    public function index($slug)
    {
        $pages = ['nature_inside', 'in_bloom', 'sun', 'revitalisant', 'coiffant_finition', 'gentleman', 'couleur', 'plante', 'wellness'];

        if (in_array($slug, $pages)) {
            return view('public.gammes');
        }

        return view('public.index')->with('error', 'page introuvable');
    }
}
