<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSender;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request) {
        request()->validate([
            'email' => ['required']
        ]);

        $email = Newsletter::where('email', strtolower($request->email))->first();

        if($email) {
            return back()->with('error', 'Already Subscribed!');
        }

        Newsletter::create(['email' => strtolower($request->email)]);

        Mail::to(strtolower($request->email))->send(new NewsletterSender());


        return back()->with('success', 'Subscribed to the Newsletter');
    }
}
