<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email using the ContactFormMail Mailable
        Mail::to('info@empoweredmindslearning.co.tz')->send(new ContactFormMail($validated));

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
