<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Hotel;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::latest()->paginate(10);
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        $hotels = new Hotel();
        return view('hotels.create', compact('hotels'));
    }

    public function store(HotelRequest $request)
    {
        Hotel::create($request->validated());
        return redirect()->route('hotels.index')->with('success', 'hotel creado con exito');
    }

    public function show(int $id)
    {
        $hotels = Hotel::find($id);
        return view('hotels.show', compact('hotels'));
    }

    public function edit(int $id)
    {
        $hotels = Hotel::find($id);
        return view('hotels.edit', compact('hotels'));
    }

    public function update(HotelRequest $request, int $id)
    {
    $hotels = Hotel::find($id);
    $hotels->update($request->validated());

    return redirect()->route('hotels.index')->with('update', 'hotel actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $hotels = Hotel::find($id);
        $hotels->delete();
        return redirect()->route('hotels.index')->with('deleted', 'hotel eliminado correctamente');
    }
}