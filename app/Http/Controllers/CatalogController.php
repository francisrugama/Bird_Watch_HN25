<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Http\Requests\CatalogRequest;
use Illuminate\Support\Facades\File;

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
        $data = $request->validated();


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/catalogs'), $imageName);
            $data['image'] = 'images/catalogs/' . $imageName;
        }

        Catalog::create($data);

        return redirect()
            ->route('catalogs.index')
            ->with('success', 'Catálogo creado con éxito.');
    }

    public function show(int $id)
    {
        $catalogs = Catalog::findOrFail($id);
        return view('catalogs.show', compact('catalogs'));
    }

    public function edit(int $id)
    {
        $catalogs = Catalog::findOrFail($id);
        return view('catalogs.edit', compact('catalogs'));
    }

    public function update(CatalogRequest $request, int $id)
    {
        $catalogs = Catalog::findOrFail($id);
        $data = $request->validated();


        if ($request->hasFile('image')) {
            if ($catalogs->image && File::exists(public_path($catalogs->image))) {
                File::delete(public_path($catalogs->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/catalogs'), $imageName);
            $data['image'] = 'images/catalogs/' . $imageName;
        }

        $catalogs->update($data);

        return redirect()
            ->route('catalogs.index')
            ->with('updated', 'Catálogo actualizado con éxito.');
    }

    public function destroy(int $id)
    {
        $catalogs = Catalog::findOrFail($id);


        if ($catalogs->image && File::exists(public_path($catalogs->image))) {
            File::delete(public_path($catalogs->image));
        }

        $catalogs->delete();

        return redirect()
            ->route('catalogs.index')
            ->with('deleted', 'Catálogo eliminado correctamente.');
    }
}
