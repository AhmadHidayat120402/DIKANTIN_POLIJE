<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAppController extends Controller
{
    public function index()
    {
        return view('loginApp', [
            'title' => 'login',
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        // dd('berhasil login');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard.index');
        }

        return back()->with('loginError', 'Login Failed !');
    }
}
