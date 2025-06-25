<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('username','password');

       if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect('/');
       }

       return back()->withErrors([
            'username' => 'Gagal Login',
       ])->withInput();
    }
}
