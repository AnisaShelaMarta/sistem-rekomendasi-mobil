<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function simpan(Request $request)
    {
        $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
        ]);

        Feedback::create([
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
        ]);

        return redirect('/')
            ->with('success', 'Terima kasih atas penilaian Anda');
    }

    public function index()
    {
        $feedbacks = Feedback::latest()->get();

        return view('admin.feedback', compact('feedbacks'));
    }

   public function detail($id)
{
    $feedback = Feedback::findOrFail($id);

    return view('detailfeedback', compact('feedback'));
}
}