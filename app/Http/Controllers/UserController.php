<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class UserController extends Controller
{
    public function index()
    {
        $events = Event::with('tickets')->get();
        return view('site.dashboard', compact('events'));
    }
    public function aboutUs()
    {
        $events = Event::with('tickets')->get();
        return view('site.aboutUs', compact('events'));
    }
    public function showEvents()
    {
        $events = Event::with('tickets')->get();
        return view('site.event-details', compact('events'));
    }
}
