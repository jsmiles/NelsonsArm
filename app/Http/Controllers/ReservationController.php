<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'reservation_date' => 'required',
            'reservation_time' => 'required',
            'guest_count' => 'required',
            'reservation_name' => 'required',
            'reservation_email' => 'required',
        ]);

        // dd(request());

        Reservation::create([
            'reservation_date' => request()->reservation_date,
            'reservation_time' => request()->reservation_time,
            'guest_count' => request()->guest_count,
            'reservation_name' => request()->reservation_name,
            'reservation_email' => request()->reservation_email,
        ]);

        return redirect('/')->with('success', 'You have succesfully made a booking request. We will confirm soon!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
