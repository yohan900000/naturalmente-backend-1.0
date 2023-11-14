<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function doLogin(AuthRequest $authRequest)
    {
        $authRequest->validated();

        if(Auth::attempt($authRequest->validated())) {
            $authRequest->session()->regenerate();
            return redirect()->intended(route('index'));
        }

        return redirect()->route('login')->with('error', 'Nom de compte ou mot de passe inccorect');
    }


}
