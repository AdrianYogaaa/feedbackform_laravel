<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'project' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'project' => $request->project,
            'message' => $request->message,
        ]);

        return response()->json(['success' => true, 'message' => 'Feedback submitted successfully!']);
    }
}
