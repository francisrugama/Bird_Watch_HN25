<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use App\Models\Visitor;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::with('visitors')->paginate(10);
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $reservations = new Reservation();
        $visitors = Visitor::all();
        return view('reservations.create', compact('reservations', 'visitors'));
    }

    public function store(ReservationRequest $request)
    {
        Reservation::create($request->validated());
        return redirect()->route('reservations.index')->with('success', 'la reservacion a sido creada con exito');
    }

    public function show(string $id)
    {
        $reservations = Reservation::find($id);
        $visitors = Visitor::all();
       return view('reservations.show', compact('reservations'));
    }

    public function edit(int $id)
    {
        $reservations = Reservation::find($id);
        $visitors = Visitor::all();
         return view('reservations.edit', compact('reservations', 'visitors'));
    }

    public function update(ReservationRequest $request, int $id)
    {
        $reservations = Reservation::find($id);
        $reservations->update($request->validated());

        return redirect()->route('reservations.index')->with('update', 'la reservacion actualizada con éxito');
    }

    public function destroy(int $id)
    {
        $reservations = Reservation::find($id);
        $reservations->delete();
        return redirect()->route('reservations.index')->with('deleted', 'la reservacion eliminada correctamente');
    }
}
