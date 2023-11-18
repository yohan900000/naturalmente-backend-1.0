<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\Gamme;
use Illuminate\View\View;

class AdministrationController extends Controller
{
    public function index(): View
    {
        $gammes = Gamme::all();

        return view('administration.index', compact('gammes'));
    }

}
