<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
       $reservations = Reservation::get();
        return view('admin.dashboard', compact('reservations'));
    }
}
