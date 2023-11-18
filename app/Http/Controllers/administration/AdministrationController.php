<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdministrationController extends Controller
{
    public function index(): View
    {
        return view('administration.index');
    }

}
