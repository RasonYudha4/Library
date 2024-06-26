<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index() {
        return view('feedback');
    }

    public function store(Request $request) {

        $user = auth()->user();

        $validator = $request->validate([
            'subject' => 'required',
            'body' => 'required'
        ]);

        $feedback = Feedback::create([
            'subject' => $request->input('subject'),
            'body' => $request->input('body'),
            'userId' => $user->id
        ]);

        return redirect('/dashboard');
    }

    public function show() {
        $feedbacks = Feedback::with('user')->get();
        $users = User::all();
        return view('admin.feedback', [
            'feedbacks' => $feedbacks,
            'users' => $users
        ]);
    }

    public function destroy($id) {
        $feedback = Feedback::class->find($id)->first();
        $feedback->delete();

        return redirect('/admin/feedback');
    }
}
