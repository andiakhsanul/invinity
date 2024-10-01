<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seminar;

class seminarcontroller extends Controller
{
    public function index()
    {
        $seminar = seminar::all();
        return view('conference', compact('seminar'));
    }

    public function create()
    {
        return view('conference');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'country_of_residence' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'email' => 'required|email|max:255',
            'student_number' => 'required|string|max:255',
            'screenshot_proof' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        seminar::create($request->all());

        return redirect()->route('seminar.index')
                         ->with('success', 'Seminar created successfully.');
    }

    // public function show($id)
    // {
    //     $seminar = seminar::find($id);
    //     return view('seminar.show', compact('seminar'));
    // }

    // public function edit($id)
    // {
    //     $seminar = seminar::find($id);
    //     return view('seminar.edit', compact('seminar'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'date' => 'required|date',
    //     ]);

    //     $seminar = seminar::find($id);
    //     $seminar->update($request->all());

    //     return redirect()->route('seminar.index')
    //                      ->with('success', 'Seminar updated successfully.');
    // }

    // public function destroy($id)
    // {
    //     $seminar = seminar::find($id);
    //     $seminar->delete();

    //     return redirect()->route('seminar.index')
    //                      ->with('success', 'Seminar deleted successfully.');
    // }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}
