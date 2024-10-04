<?php

namespace App\Http\Controllers;

use App\Mail\PaymentConfirmationEmail;
use App\Models\papermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class papercontroller extends Controller
{
    public function index()
    {
        $papers = papermodel::paginate(10);
        return view('admin.paper.index', compact('papers'));
    }

    public function showApprove(Request $request, $id)
    {
        $payment_detail = papermodel::find($id);
        return view('admin.paper.approve', compact('payment_detail'));
    }
    public function delete(Request $request, $id)
    {
        $data = papermodel::find($id);
        $data->delete();
        return redirect()->route('paper.index')->with('success', 'Successfully Deleted');
    }
    public function approve(Request $request, $id)
    {

        $payment = papermodel::find($id);
        $payment->status = $request->input('status');
        $payment->reason = $request->input('reason');
        $payment->save();

        return redirect()->route('paper.index')->with('success', 'Successfully approved ' . $payment->full_name);
    }

    public function sendEmail()
    {
        Mail::to('alifadiawan2005@gmail.com')->send(new PaymentConfirmationEmail());

        return "Email has been sent to alifadiawan2005@gmail.com";
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
                'poster' => NULL,
                'document' => NULL,
                'user_id' => Auth::user()->id,
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

    public function update(Request $request)
    {
        $paper = papermodel::where('user_id', Auth::user()->id)->first();

        if (!$paper) {
            return redirect()->back()->with('error', 'You have to wait yor payment have been approved');
        }
        if ($paper->status === 0 && $paper->status === 2) {
            return redirect()->back()->with('error', 'You have to wait your payment have been approved');
        }
        if ($paper->status === 2) {
            return redirect()->back()->with('error', 'Your payment was declined. Go to Submission Page for more detail');
        }

        // Handle document upload
        if ($request->hasFile('document')) {

            $originalDocumentName = $request->file('document')->getClientOriginalName();
            $uniqueDocumentName = time() . '_' . $originalDocumentName;

            $documentPath = $request->file('document')->storeAs('documents', $uniqueDocumentName, 'public');

            $paper->document = $documentPath;
        }

        // Handle poster upload
        if ($request->hasFile('poster')) {

            $originalPosterName = $request->file('poster')->getClientOriginalName();
            $uniquePosterName = time() . '_' . $originalPosterName;

            $posterPath = $request->file('poster')->storeAs('posters', $uniquePosterName, 'public');

            $paper->poster = $posterPath;
        }

        $paper->save();

        return redirect()->back()->with('success', 'Paper and Poster submitted Successfully');
    }
}
