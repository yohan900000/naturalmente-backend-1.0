<?php

namespace App\Http\Controllers;


use App\Models\Gamme;
use App\Models\product;

class HomeController extends Controller
{
    public function index() {

        $test = Product::find(1);
dd($test->gamme->name);


        return view('index');
    }
}
