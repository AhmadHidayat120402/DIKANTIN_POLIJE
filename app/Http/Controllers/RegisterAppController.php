<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterAppController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        // mengembalikan nilai dalam bentuk json
        // return $request->all();
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful Please Login!');

        return redirect('/')->with('success', 'Registration successfully Please Login!');
    }
}
