<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seminar;
use Illuminate\Support\Facades\Auth;

class seminarcontroller extends Controller
{
    public function index()
    {
        $seminar = seminar::all();
        return view('conference', compact('seminar'));
    }

    public function indexAdmin()
    {
        $seminar = seminar::all();
        return view('admin.seminar.index', compact('seminar'));
    }

    public function create()
    {
        return view('conference');
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'full_name' => 'required|string|max:255',
        //     'country_of_residence' => 'required|string|max:255',
        //     'institution' => 'required|string|max:255',
        //     'profession' => 'required|string|max:255',
        //     'phone_number' => 'required|numeric',
        //     'email' => 'required|email|max:255',
        //     'student_number' => 'required|string|max:255',
        //     'screenshot_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
        //     'nationality' => 'required|string|max:255',
        // ]);

        // Proses upload gambar screenshot proof
        if ($request->hasFile('screenshot_proof')) {
            $imageName = time() . '.' . $request->screenshot_proof->extension();
            $request->screenshot_proof->move(public_path('uploads/seminar'), $imageName);
        }

        // Membuat seminar baru
        seminar::create([
            'full_name' => $request->full_name,
            'country_of_residence' => $request->country_of_residence,
            'institution' => $request->institution,
            'profession' => $request->profession,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'student_number' => $request->student_number,
            'screenshot_proof' => $imageName,
            'nationality' => $request->nationality,
            'user_id' => Auth::user()->id, // Mengambil user_id dari user yang sedang login
        ]);

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