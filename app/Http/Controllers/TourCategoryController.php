<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use App\Http\Requests\TourCategoryRequest;

class TourCategoryController extends Controller
{
    public function index()
    {
        $tours_categories = TourCategory::latest()->paginate(10);
        return view('tours_categories.index', compact('tours_categories'));
    }

    public function create()
    {
        $tours_categories = new TourCategory();
        return view('tours_categories.create', compact('tours_categories'));
    }

    public function store(TourCategoryRequest $request)
    {
        TourCategory::create($request->validated());
        return redirect()->route('tours_categories.index')->with('success', 'Categoría de tour creada con éxito');
    }

    public function show(int $id)
    {
        $tours_categories = TourCategory::find($id);
        return view('tours_categories.show', compact('tours_categories'));
    }

    public function edit(int $id)
    {
        $tours_categories = TourCategory::find($id);
        return view('tours_categories.edit', compact('tours_categories'));
    }

    public function update(TourCategoryRequest $request, int $id)
    {
        $tours_categories = TourCategory::find($id);
        $tours_categories->update($request->validated());

        return redirect()->route('tours_categories.index')->with('updated', 'Categoría de recorrido actualizada con éxito');
    }

    public function destroy(int $id)
    {
        $tours_categories = TourCategory::find($id);
        $tours_categories->delete();
        return redirect()->route('tours_categories.index')->with('deleted', 'Categoría de Recorrido eliminada correctamente');
    }
}