<?php

namespace App\Http\Controllers;

use App\Models\Gamme;
use App\Models\product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View {
        return view('public.index');
    }
}
