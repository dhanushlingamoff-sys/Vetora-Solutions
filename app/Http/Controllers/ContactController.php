<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{

public function submit(Request $request)
{
    // Validate form
    $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'full_phone' => 'required|string',
        'email' => 'required|email',
        'business' => 'required|string',
        'g-recaptcha-response' => 'required'
    ]);

    // Verify reCAPTCHA (skipped on local — Google rejects localhost tokens)
    if (!app()->environment('local')) {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        if (!$response->json()['success']) {
            if ($request->wantsJson()) {
                return response()->json(['errors' => ['captcha' => ['Captcha verification failed']]], 422);
            }
            return back()->withErrors(['captcha' => 'Captcha verification failed']);
        }
    }

    $data = $request->all();

    // Send to multiple emails
    $emails = [
        'dhanush@trionova.in'
    ];
    // $emails = [
    //     'durgadevi.vijayakumar@vetora.au',
    //     'prakas.balasubramanian@vetora.au',
    //     'vishnupriya.subramaniam@vetora.au',
    //     'info@vetora.au'
    // ];

    Mail::to($emails)->send(new ContactFormMail($data));

    if ($request->wantsJson()) {
        return response()->json(['success' => true, 'redirect' => '/thank-you']);
    }
    return redirect('/thank-you');
}
}