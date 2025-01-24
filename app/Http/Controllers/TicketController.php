<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{

    public function purchase($ticketId)
    {
        // Fetch the ticket by its ID
        $event = Event::findOrFail($ticketId);

        return view('site.rent-venue', compact('event'));
    }
}