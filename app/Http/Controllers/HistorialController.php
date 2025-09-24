<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Tution;

use App\Models\Historial_detail;
use App\Http\Request\Historial_detailRequest;
use App\Models\Tour;
use App\Models\Reservation;
use App\Models\Visitor;

class Historial_detailController extends Controller
{
    
    public function index()
    {
        $historials = Historial_detail::with('tours, reservations, visitors')->paginate(10);
        return view('historials.index', compact('historials'));
    }

    public function create()
    {
        $historials = new Historial_detail();
        $tours = Tour::all();
        $reservations = Reservation::all();
        $visitors = Visitor::all();
        return view('historials.create', compact('historials, tours, reservations, visitors'));
    }

    public function store(HistorialRequest $request)
    {
        Historial_detail::create($request->validated());
        return redirect()->route('historials.index')->with('success', 'el historial a sido creado con exito');
    }

    public function show(string $id)
    {
        $historials = Historial_detail::find($id);
        $tours = Tour::all();
        $reservations = Reservation::all();
        $visitors = Visitor::all();
       return view('historials.show', compact('historials'));
    }

    public function edit(imt $id)
    {
        $historials = Historial_detail::find($id);
        $tours = Tour::all();
        $reservations = Reservation::all();
        $visitors = Visitor::all();
        return view('historials.edit', compact('historials, tours, reservations, visitors'));
    }

    public function update(Request $request, int $id)
    {
        $historials = Historial_detail::find($id);
        $historials->update($request->validated());

        return redirect()->route('historials.index')->with('update', 'el historial actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $historials = Historial_detail::find($id);
        $historials->delete();
        return redirect()->route('historials.index')->with('deleted', 'el historial eliminado correctamente');
    }
}
