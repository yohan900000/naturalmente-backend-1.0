<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ColorationController extends Controller
{
    public function index(): View
    {
        return view('coloration');
    }
}
