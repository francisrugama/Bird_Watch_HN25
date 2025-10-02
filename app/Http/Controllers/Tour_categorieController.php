<?php

namespace App\Http\Controllers;

use App\Models\Tour_categorie;
use App\Http\Requests\Tour_categorieRequest;

class Tour_categorieController extends Controller
{
    public function index()
    {
        $tours_categories = Tour_categorie::latest()->paginate(10);
        return view('tours_categories.index', compact('tours_categories'));
    }

    public function create()
    {
        $tours_categories = new Tour_categorie();
        return view('tours_categories.create', compact('tours_categories'));
    }

    public function store(Tour_categorieRequest $request)
    {
        Tour_categorie::create($request->validated());
        return redirect()->route('tours_categories.index')->with('success', 'Categoría de Recorrido creada con éxito');
    }

    public function show(string $id)
    {
        $tours_categories = Tour_categorie::find($id);
        return view('tours_categories.show', compact('tours_categories'));
    }

    public function edit(int $id)
    {
        $tours_categories = Tour_categorie::find($id);
        return view('tours_categories.edit', compact('tours_categories'));
    }

    public function update(Tour_categorieRequest $request, int $id)
    {
        $tours_categories = Tour_categorie::find($id);
        $tours_categories->update($request->validated());
        return redirect()->route('tours_categories.index')->with('updated', 'Categoría de tour actualizada con éxito');
    }

    public function destroy(int $id)
    {
        $tours_categories = Tour_categorie::find($id);
        $tours_categories->delete();
        return redirect()->route('tours_categories.index')->with('deleted', 'Categoría de tour eliminada correctamente');
    }
}
