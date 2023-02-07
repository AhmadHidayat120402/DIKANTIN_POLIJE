<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAppController extends Controller
{
    public function index()
    {
        return view('loginApp', [
            'title' => 'login',
        ]);
    }
}
