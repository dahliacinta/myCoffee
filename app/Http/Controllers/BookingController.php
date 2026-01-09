<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Display bookings for the authenticated user only
    public function index()
    {
        $bookings = auth()->user()->bookings; // Only user's bookings
        return view('bookings.index', compact('bookings'));
    }

    // Store a new booking - check auth here and redirect guests to register
    public function store(Request $request)
{
    // Validate the request first (even for guests)
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'pax' => 'required|numeric',
        'date' => 'required|date',
        'package_id' => 'required|numeric',
        'address' => 'nullable',
    ]);

    // Check if user is authenticated
    if (!auth()->check()) {
        // Store the validated data in session for later
        session(['pending_booking' => $validatedData]);
        // Redirect with an error message instead of status
        return redirect()->route('register')->withErrors(['booking' => 'Please register to make a booking. You can try booking again after registering.']);
    }

    // If authenticated, save the booking directly
    $booking = new Booking();
    $booking->user_id = auth()->id();
    $booking->name = $request->name;
    $booking->email = $request->email;
    $booking->phone = $request->phone;
    $booking->pax = $request->pax;
    $booking->date = $request->date;
    $booking->package_id = $request->package_id;
    $booking->address = $request->address;
    $booking->save();

    return redirect()->route('bookings.index')->with('success', 'Booking submitted successfully!');
}

    // Edit a booking (only if it belongs to the user)
    public function edit(Booking $booking)
    {
        // Ensure the booking belongs to the authenticated user
        if ($booking->user_id !== auth()->id()) {
            abort(403, 'Unauthorized'); // Or redirect with error
        }

        return view('bookings.edit', compact('booking'));
    }

    // Update a booking (only if it belongs to the user)
    public function update(Request $request, Booking $booking)
    {
        // Ensure the booking belongs to the authenticated user
        if ($booking->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pax' => 'required|numeric',
            'date' => 'required|date',
            'package_id' => 'required|numeric',
            'address' => 'nullable',
        ]);

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->pax = $request->pax;
        $booking->date = $request->date;
        $booking->package_id = $request->package_id;
        $booking->address = $request->address;
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully!');
    }

    // Delete a booking (only if it belongs to the user)
    public function destroy(Booking $booking)
    {
        // Ensure the booking belongs to the authenticated user
        if ($booking->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }
}