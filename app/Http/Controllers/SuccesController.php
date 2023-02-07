<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccesController extends Controller
{
    public function index()
    {
        return view('dashboard.success', [
            'title' => 'Success',
        ]);
    }
}
