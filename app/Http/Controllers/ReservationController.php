<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
    
        // Create a new reservation
        $reservation = Reservation::create([
            'event_id' => $request->event_id,
            'name' => $request->event_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'event_details' => $request->event_details?? null,
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your reservation request has been submitted successfully!');
    }
}
