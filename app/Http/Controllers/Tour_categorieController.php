<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Tours_categorie;
use App\Http\Requests\Tours_categorieRequest;

class Tours_categorieController extends Controller
{
    public function index()
    {
        $tours_categories = Tours_categorie::latest()->paginate(10);
        return view('tours_categories.index', compact('tours_categories'));
    }

    public function create()
    {
        $tours_categories = new Tours_categorie();
        return view('tours_categories.create', compact('tours_categories'));
    }

    public function store(Tours_categorieRequest $request)
    {
        Tours_categorie::create($request->validated());
        return redirect()->route('tours_categories.index')->with('success', 'categoria de tur creada con exito');
    }

    public function show(int $id)
    {
        $tours_categories = Tours_categorie::find($id);
        return view('tours_categories.show', compact('tours_categories'));
    }

    public function edit(int $id)
    {
        $tours_categories = Tours_categorie::find($id);
        return view('tours_categories.edit', compact('tours_categories'));
    }

    public function update(Tours_categorieRequest $request, int $id)
    {
    $tours_categories = Tours_categorie::find($id);
    $tours_categories->update($request->validated());

    return redirect()->route('tours_categories.index')->with('update', 'categoria de tur actualizada con éxito');
    }

    public function destroy(int $id)
    {
        $tours_categories = Tours_categorie::find($id);
        $tours_categories->delete();
        return redirect()->route('tours_categories.index')->with('deleted', 'categoria de tur eliminada correctamente');
    }
}