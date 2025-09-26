<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Visitor;
use App\Http\Requests\VisitorRequest;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::latest()->paginate(10);
        return view('visitors.index', compact('visitors'));
    }

    public function create()
    {
        $visitors = new Visitor();
        return view('visitors.create', compact('visitors'));
    }

    public function store(VisitorRequest $request)
    {
        Visitor::create($request->validated());
        return redirect()->route('visitors.index')->with('success', 'visitante creado con exito');
    }

    public function show(int $id)
    {
        $visitors = Visitor::find($id);
        return view('visitors.show', compact('visitors'));
    }

    public function edit(int $id)
    {
        $visitors = Visitor::find($id);
        return view('visitors.edit', compact('visitors'));
    }

    public function update(VisitorRequest $request, int $id)
    {
    $visitors = Visitor::find($id);
    $visitors->update($request->validated());

    return redirect()->route('visitors.index')->with('update', 'visitante actualizado con éxito');
    }

    public function destroy(int $id)
    {
        $visitors = Visitor::find($id);
        $visitors->delete();
        return redirect()->route('visitors.index')->with('deleted', 'visitante eliminado correctamente');
    }
}