<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'service'])->get();
        return view('dashboard.bookings.index', compact('bookings'));
    }
}
