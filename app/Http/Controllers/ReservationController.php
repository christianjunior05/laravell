<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController
{
    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);
        Reservation::create($request->all());

        return redirect()->route('events.show', $request->event_id)->with('success', 'Réservation réussie.');
    }
}