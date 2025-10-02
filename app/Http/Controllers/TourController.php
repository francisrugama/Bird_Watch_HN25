<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Http\Requests\TourRequest;
use App\Models\Reservation;
use App\Models\Guide;
use App\Models\Tour_categorie;
use App\Models\Admin;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::with(['reservations', 'guides', 'tours_categories', 'admins'])->paginate(10);
        return view("tours.index", compact("tours"));
    }

    public function create()
    {
        $tours = new Tour();
        $reservations = Reservation::all();
        $guides = Guide::all();
        $tours_categories = Tour_categorie::all();
        $admins = Admin::all();


        return view('tours.create', compact('tours', 'reservations', 'guides', 'tours_categories', 'admins'));
    }

    public function store(TourRequest $request)
    {
        Tour::create($request->validated());
        return redirect()->route('tours.index')->with('success', 'El tour ha sido creado con éxito');
    }

    public function show(string $id)
    {

        $tours = Tour::find($id);
        return view('tours.show', compact('tours'));
    }

    public function edit(int $id)
    {
        $tours = Tour::find($id);
        $reservations = Reservation::all();
        $guides = Guide::all();
        $tours_categories = Tour_categorie::all();
        $admins = Admin::all();


        return view('tours.edit', compact('tours', 'reservations', 'guides', 'tours_categories', 'admins'));
    }

    public function update(TourRequest $request, int $id)
    {
        $tours = Tour::find($id);
        $tours->update($request->validated());

        return redirect()->route('tours.index')->with('update', 'El tour ha sido actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $tours = Tour::find($id);
        $tours->delete();
        return redirect()->route('tours.index')->with('deleted', 'El tour ha sido eliminado correctamente');
    }
}
