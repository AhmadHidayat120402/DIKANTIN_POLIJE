<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstAppController extends Controller
{
    public function index()
    {
        return view('first', [
            'title' => 'Landing Page',
        ]);
    }
}
