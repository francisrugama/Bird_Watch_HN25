<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::latest()->paginate(10);
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        $admins = new Admin();
        return view('admins.create', compact('admins'));
    }

    public function store(AdminRequest $request)
    {
        Admin::create($request->validated());
        return redirect()->route('admins.index')->with('success', 'administrador creado con exito');
    }

    public function show($id) 
    {
        $admins = Admin::findOrFail($id);
        return view('admins.show', compact('admins'));
    }

    public function edit($id)
    {
        $admins = Admin::findOrFail($id);
        return view('admins.edit', compact('admins'));
    }

    public function update(AdminRequest $request, $id)
    {
        $admins = Admin::findOrFail($id);
        $admins->update($request->validated());
        return redirect()->route('admins.index')->with('update', 'administrador actualizado con éxito');
    }

    public function destroy($id)
    {
        $admins = Admin::findOrFail($id);
        $admins->delete();
        return redirect()->route('admins.index')->with('deleted', 'administrador eliminado correctamente');
    }
}
