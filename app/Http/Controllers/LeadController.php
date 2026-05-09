<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function submitSample(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
            'service' => 'required|string|max:255',
            'targetMarket' => 'required|string|max:1000',
            'notes' => 'nullable|string|max:1000',
        ]);

        // Log the lead (in production, you'd save to database or send email)
        Log::info('New sample lead request', $validated);

        // Redirect to welcome page with success message
        return redirect('/#free-sample')->with('success', 'Thank you! We will review your request and send 20 free sample leads to your email.');
    }
}
