<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Tution;

use App\Models\Place;
use App\Http\Request\PlaceRequest;
use App\Models\Tour;
use App\Models\Hotel;

class PlaceController extends Controller
{
    
    public function index()
    {
        $historials = Place::with('tours, hotels')->paginate(10);
        return view('historials.index', compact('historials'));
    }

    public function create()
    {
        $places = new Place();
        $tours = Tour::all();
        $hotels = Hotel::all();
        return view('places.create', compact('places, tours, hotels'));
    }

    public function store(PlaceRequest $request)
    {
        Place::create($request->validated());
        return redirect()->route('places.index')->with('success', 'el lugar a sido creado con exito');
    }

    public function show(string $id)
    {
        $places = Place::find($id);
        $tours = Tour::all();
        $hotels = Hotel::all();
       return view('places.show', compact('places'));
    }

    public function edit(imt $id)
    {
        $places = Place::find($id);
        $tours = Tour::all();
        $hotels = Hotel::all();
        return view('places.edit', compact('places, tours, hotels,'));
    }

    public function update(Request $request, int $id)
    {
        $places = Place::find($id);
        $places->update($request->validated());

        return redirect()->route('places.index')->with('update', 'el lugar actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $places = Place::find($id);
        $places->delete();
        return redirect()->route('places.index')->with('deleted', 'el lugar eliminado correctamente');
    }
}
