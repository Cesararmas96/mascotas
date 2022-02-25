<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especie;
use Illuminate\Http\Request;


class EspecieController extends Controller
{

    public function index()
    {
        return view('admin.especies.index');
    }

    public function create()
    {
        return view('admin.especies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:especies',
            'status' => 'required'

        ]);

        $especy = Especie::create($request->all());
        return redirect()->route('admin.especies.edit', $especy)->with('info', 'Guardado con Exito!');
    }

    public function show(Especie $especy)
    {
        return view('admin.especies.show', compact('especy'));
    }

    public function edit(Especie $especy)
    {
        return view('admin.especies.edit', compact('especy'));
    }

    public function update(Request $request, Especie $especy)
    {
        $request->validate([
            'nombre' => 'required:unique',
            'status' => 'required'
        ]);

        $especy->update($request->all());
        return redirect()->route('admin.especies.edit', $especy)->with('info', 'Actualizado con exito');
    }

    public function destroy(Especie $especy)
    {
        $especy->delete();
        return redirect()->route('admin.especies.index')->with('info', 'Eliminado con exito');
    }
}
