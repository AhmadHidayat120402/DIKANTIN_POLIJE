<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaitingController extends Controller
{
    public function index()
    {
        return view('dashboard.waiting', [
            'title' => 'Waiting Time',
        ]);
    }
}
