<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Http\Request\TourRequest;
use App\Models\Guide;
use App\Models\Reservation;
use App\Models\TourCategory;
use App\Models\Admin;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::with('reservations, guides, tours_categories, admins')->paginate(10);
        return view('tours.index', compact('tours'));
    }

    public function create()
    {
        $tours = new Tour();
        $reservations = Reservation::all();
        $tours_categories = Tours_categorie::all();
        $admins = Admin::all();
        return view('tours.create', compact('tours, reservations, guides, tours_categories, admins'));
    }

    public function store(TourRequest $request)
    {
        Tour::create($request->validated());
        return redirect()->route('tours.index')->with('success', 'el tur a sido creado con exito');
    }

    public function show(string $id)
    {

        $tours = Tour::find($id);
        $guides = Guide::all();
        $reservations = Reservation::all();
        $tours_categories = Tours_categorie::all();
        $admins = Admin::all();
       return view('tours.show', compact('tours'));
    }

    public function edit(int $id)
    {
        $tours = Tour::find($id);
        $reservations = Reservation::all();
        $tours_categories = Tours_categorie::all();
        $admins = Admin::all();
        return view('tours.edit', compact('tours, reservations, guides, tours_categories, admins'));
    }

    public function update(TourRequest $request, int $id)
    {
        $tours = Tour::find($id);
        $tours->update($request->validated());

        return redirect()->route('tours.index')->with('update', 'el tur actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $tours = Tour::find($id);
        $tours->delete();
        return redirect()->route('tours.index')->with('deleted', 'el tur eliminado correctamente');
    }
}
