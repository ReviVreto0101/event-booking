<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Fetch events along with tickets
        $events = Event::with('tickets')->get();
    
        return view('admin.events', compact('events'));
    }

    public function show($eventId)
    {
        // Fetch the event by its ID along with its related tickets
        $event = Event::with('tickets')->findOrFail($eventId);

        // Return the event details view
        return view('site.ticket-details', compact('event'));
        // return view('site.event-details', compact('event'));
    }

    public function createEvent(){

        return view('admin.createEvent');
    }

    public function storeEvent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        // Create the event
        $event = Event::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'event_date' => $validated['event_date'],
            'location' => $validated['location'],
        ]);

        // Return a success response
        return redirect()->route('admin.events.list');

    }

    public function destroy($id)
    {
        // Find the event by its ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return response()->json([
                'message' => 'Event not found.',
            ], 404);
        }

        // Delete the event
        $event->delete();


        return redirect()->route('admin.events.list');
    }
}
