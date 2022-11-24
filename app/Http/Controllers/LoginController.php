<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }
    public function authenticate(Request $request){
       $credential=$request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
       ]);
    
       if (Auth::attempt($credential)){
        $request->session()->regenerate();
        return redirect()->intended('/');
        return redirect()->intended('/');
       } 
       return back()->withErrors([
        'email' => 'Email atau password salah'
       ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}