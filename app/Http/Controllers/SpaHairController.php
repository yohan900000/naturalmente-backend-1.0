<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SpaHairController extends Controller
{
    public function index(): View {
        return view('spa-cheveux');
    }
}
