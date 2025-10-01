<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Guide;
use App\Http\Requests\GuideRequest;

class GuideController extends Controller
{
    public function index()
    {
        $guides = Guide::latest()->paginate(10);
        return view('guides.index', compact('guides'));
    }

    public function create()
    {
        $guides = new Guide();
        return view('guides.create', compact('guides'));
    }

    public function store(GuideRequest $request)
    {
        Guide::create($request->validated());
        return redirect()->route('guides.index')->with('success', 'guia creado con exito');
    }

    public function show(int $id)
    {
        $guides = Guide::find($id);
        return view('guides.show', compact('guides'));
    }

    public function edit(int $id)
    {
        $guides = Guide::find($id);
        return view('guides.edit', compact('guides'));
    }

    public function update(GuideRequest $request, int $id)
    {
    $guides = Guide::find($id);
    $guides->update($request->validated());

    return redirect()->route('guides.index')->with('update', 'guia actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $guides = Guide::find($id);
        $guides->delete();
        return redirect()->route('guides.index')->with('deleted', 'guia eliminado correctamente');
    }
}
