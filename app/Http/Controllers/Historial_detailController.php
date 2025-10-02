<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Historial_detail;
use App\Http\Requests\Historial_detailRequest;
use App\Models\Tour;
use App\Models\Reservation;
use App\Models\Visitor;

class Historial_detailController extends Controller
{

    public function index()
    {
        $historial_details = Historial_detail::with('tours, reservations, visitors')->paginate(10);
        return view('historial_details.index', compact('historial_details'));
    }

    public function create()
    {
        $historial_details = new Historial_detail();
        $tours = Tour::all();
        $reservations = Reservation::all();
        $visitors = Visitor::all();
        return view('historial_details.create', compact('historial_details', 'tours', 'reservations', 'visitors'));
    }

    public function store(Historial_detailRequest $request)
    {
        Historial_detail::create($request->validated());
        return redirect()->route('historial_details.index')->with('success', 'el historial a sido creado con exito');
    }

    public function show(string $id)
    {
        $historial_details = Historial_detail::find($id);
        $tours = Tour::all();
        $reservations = Reservation::all();
        $visitors = Visitor::all();
       return view('historial_details.show', compact('historial_details'));
    }

    public function edit(int $id)
    {
        $historial_details = Historial_detail::find($id);
        $tours = Tour::all();
        $reservations = Reservation::all();
        $visitors = Visitor::all();
        return view('historial_details.edit', compact('historial_details, tours, reservations, visitors'));
    }

    public function update(Request $request, int $id)
    {
        $historial_details = Historial_detail::find($id);
        $historial_details->update($request->validated());

        return redirect()->route('historial_details.index')->with('update', 'el historial actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $historial_details = Historial_detail::find($id);
        $historial_details->delete();
        return redirect()->route('historial_details.index')->with('deleted', 'el historial eliminado correctamente');
    }
}
