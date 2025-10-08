<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Catalog;
use App\Http\Requests\CatalogRequest;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::latest()->paginate(10);
        return view('catalogs.index', compact('catalogs'));
    }

    public function create()
    {
        $catalogs = new Catalog();
        return view('catalogs.create', compact('catalogs'));
    }

    public function store(CatalogRequest $request)
    {
        Catalog::create($request->validated());
        return redirect()->route('catalogs.index')->with('success', 'Catalogo creado con exito');
    }

    public function show(int $id)
    {
        $catalogs = Catalog::find($id);
        return view('catalogs.show', compact('catalogs'));
    }

    public function edit(int $id)
    {
        $catalogs = Catalog::find($id);
        return view('catalogs.edit', compact('catalogs'));
    }

    public function update(CatalogRequest $request, int $id)
    {
    $catalogs = Catalog::find($id);
    $catalogs->update($request->validated());

    return redirect()->route('catalogs.index')->with('updated', 'Catalogo actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $catalogs = Catalog::find($id);
        $catalogs->delete();
        return redirect()->route('catalogs.index')->with('deleted', 'Catalogo eliminado correctamente');
    }
}
