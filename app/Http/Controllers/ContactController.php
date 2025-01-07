<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
    
        try {
            Mail::send('emails.contact', $details, function ($message) use ($details) {
                $message->to('alexchambika85@gmail.com') // Replace with your email
                        ->subject($details['subject']);
            });
    
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log the error or return an error message
            return back()->with('error', 'Failed to send your message. Please try again later. Error: ' . $e->getMessage());
        }
    }
    
}



