<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {

            if (Auth::user()->role === 2) {
                return redirect('/');
            }elseif(Auth::user()->role === 1){
                return redirect()->route('dashboard');
            }
        }

        return redirect()->back()->with('error', "Email or Password doesn't match");

    }
    public function register()
    {
        return view('register');
    }
    public function attempt_register(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
        ];

        User::create($data);
        return redirect()->route('auth.login')->with('success', 'Account successfully created, Please Login !');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}