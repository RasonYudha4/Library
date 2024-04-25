<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request) {
        return view('feedback');
    }

    public function add(Request $request) {
        $validator = $request->validate([
            'subject' => 'required',
            'body' => 'required'
        ]);

        $feedback = Feedback::create([
            'subject' => $request->input('subject'),
            'body' => $request->input('body')
        ]);

        return redirect('/feedbacks');
    }

    public function show() {
        $feedbacks = Feedback::class->all();
        return view('admin.feedback', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function destroy($id) {
        $feedback = Feedback::class->find($id)->first();
        $feedback->delete();

        return redirect('/admin/feedback');
    }
}
