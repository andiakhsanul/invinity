<?php

namespace App\Http\Controllers;

use App\Models\papermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class papercontroller extends Controller
{
    public function index()
    {
        $papers = papermodel::paginate(10);
        return view('admin.paper.index', compact('papers'));
    }

    public function submit(Request $request)
    {

        if ($request->hasFile('screenshot_proof') || $request->hasFile('payment_proof')) {

            $uploadedFiles = [];

            if ($request->hasFile('screenshot_proof')) {
                $screenshotProof = $request->file('screenshot_proof');

                $screenshotProofName = time() . '_' . uniqid() . '.' . $screenshotProof->getClientOriginalExtension();
                $screenshotProofPath = $screenshotProof->storeAs('uploads/screenshot_proof', $screenshotProofName, 'public');

                $uploadedFiles['screenshot_proof'] = $screenshotProofPath;
            }

            if ($request->hasFile('payment_proof')) {
                $paymentProof = $request->file('payment_proof');

                $paymentProofName = time() . '_' . uniqid() . '.' . $paymentProof->getClientOriginalExtension();
                $paymentProofPath = $paymentProof->storeAs('uploads/payment_proof', $paymentProofName, 'public');

                $uploadedFiles['payment_proof'] = $paymentProofPath;
            }

            // Prepare the data
            $paper = [
                'full_name' => $request->full_name,
                'nationality' => $request->nationality,
                'country_of_residence' => $request->country_of_residence,
                'institution' => $request->institution, // Optional fields
                'profession' => $request->profession,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'student_number' => $request->student_number,
                'screenshot_proof' => $uploadedFiles['screenshot_proof'],
                'payment_methods' => $request->payment_methods,
                'payment_proof' => $uploadedFiles['payment_proof'],
                'status' => 0,
                'poster' => '-',
                'document' => '-',
                'user_id' => Auth::user()->id ?? 1,
            ];

            // Store the paper submission in the database
            try {
                PaperModel::create($paper);
                return response()->json(['success' => true, 'message' => 'Paper Successfully Submitted']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'error' => 'There was an issue submitting the paper. Please try again.'], 500);
            }
        }
    }
}
