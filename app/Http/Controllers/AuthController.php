<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\papermodel;
use App\Models\seminar;
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
            } elseif (Auth::user()->role === 1) {
                $totalUsers = user::count();
                $totalPapers = papermodel::count();
                $totalSeminars = seminar::count();
                // dd($totalUsers, $totalPapers,$totalSeminars);
                // dd($totalUsers);
                return redirect()->route('dashboard')
                    ->with('totalUsers', $totalUsers)
                    ->with('totalPapers', $totalPapers)
                    ->with('totalSeminars', $totalSeminars);
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

        $existingUser = User::where('email', $data['email'])->first();

        if ($existingUser) {
            return redirect()->back()->with('error', 'This email is already registered.');
        }

        User::create($data);
        return redirect()->route('auth.login')->with('success', 'Account successfully created, Please Login !');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}