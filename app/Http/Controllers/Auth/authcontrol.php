<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontrol extends Controller
{
    public function signin()
    {
        return view('auth.signin');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        \App\Models\User::create($request->all());
        return redirect()->route('/')->with('success','Hasap döredildi');
    }

    public function login()
    {
        
    }
}
