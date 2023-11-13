<?php

namespace App\Http\Controllers;

class GammeController extends Controller
{
    public function index($slug)
    {
        $pages = ['sun', 'in_bloom'];

        if (in_array($slug, $pages)) {
            return view('gammes');
        }

        return view('index');
    }
}
