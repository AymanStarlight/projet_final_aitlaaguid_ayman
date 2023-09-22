<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index() {
        $mails = Mail::all();
        return view('backend.mail.mail', compact('mails'));
    }

    public function store(Request $request) {
        request()->validate([
            "name" => ['required'],
            "email" => ['required'],
            "subject" => ['required'],
            "message" => ['required'],
        ]);

        
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ];

        Mail::create($data);

        return back()->with('success', 'Your Email is Sent');
    }

    public function viewed(Mail $mail) {
        $mail->viewed = !$mail->viewed;
        $mail->save();

        return back();
    }

    public function viewedT(Mail $mail) {
        $mail->viewed = true;
        $mail->save();

        return back();
    }

    public function destroy(Mail $mail) {
        $mail->delete();

        return back()->with('error', 'Email Deleted');
    }
}
