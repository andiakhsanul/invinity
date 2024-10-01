<?php

namespace App\Http\Controllers;

use App\Models\papermodel;
use Illuminate\Http\Request;

class papercontroller extends Controller
{
    public function submit(Request $request)
    {
        
        $paper =[
            'full_name' => $request->fullname,
            'nationality' => $request->nationality,
            'country_of_residence' => $request->country_of_residence,
            'institution' => $request->institution, // Optional fields
            'profession' => $request->profession,
            'phone_number' => $request->phone_number,
            'email' => $request->email,,
            'student_number' => $request->student_number,
            'screenshot_proof' => $request->screenshot_proof,
            'payment_proof' => $request->payment_proof,
        ];
        
        return $paper;

        papermodel::create($paper);

        return redirect('paper')->with('success', 'Paper Successfully Submitted');

    }
}
