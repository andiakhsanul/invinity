<?php

namespace App\Http\Controllers;

use App\Models\papermodel;
use App\Models\seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function landing()
    {
        return view('welcome');
    }
    public function paper()
    {
        $hasPapers = collect();

        if (Auth::check()) {
            $hasPapers = papermodel::where('user_id', Auth::user()->id)->get();
        }

        return view('paper', compact('hasPapers'));
    }
    public function about()
    {
        return view('about');
    }
    public function guide()
    {
        $hasDocument = Auth::check() ? papermodel::where('user_id', Auth::user()->id)->first() : null;

        return view('guidepaper', compact('hasDocument'));
    }
    public function seminar()
    {
        $hasSeminars = collect();

        if (Auth::check()) {
            $hasSeminars = seminar::where('user_id', Auth::user()->id)->get();
        }

        return view('conference', compact('hasSeminars'));
    }

    public function pascon(){
        return view('invinity2024');
    }

    public function Commite(){
        return view('commite');
    }

    public function Proceeding(){
        return view('proceeding');
    }

}
