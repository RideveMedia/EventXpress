<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Handles the form submission
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
        ]);

        // Normally, you would save to DB here
        $bookingId = rand(1000, 9999); // temporary "fake" ID for testing

        // Redirect to confirmation page
        return redirect()->route('bookings.confirm', ['id' => $bookingId]);
    }

    // Displays confirmation page
    public function confirm($id)
    {
        // Normally, you'd fetch booking details by $id
        return view('layouts.bookings', ['bookingId' => $id]);
    }
}
