<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return view("home");
        }

        return back()->with('login Error');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
