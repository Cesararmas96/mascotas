<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especie;
use App\Models\Raza;
use Illuminate\Http\Request;

class RazaController extends Controller
{

    public function index()
    {
        return view('admin.razas.index');
    }


    public function create()
    {
        $especies = Especie::where('status', '1')->pluck('nombre', 'id');
        return view('admin.razas.create', compact('especies'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:razas',
            'status' => 'required',
            'especie_id' => 'required'

        ]);

        $raza = Raza::create($request->all());
        return redirect()->route('admin.razas.edit', $raza)->with('info', 'Guardado con Exito!');
    }

    public function edit(Raza $raza)
    {
        $especies = Especie::pluck('nombre', 'id');
        return view('admin.razas.edit', compact('especies', 'raza'));
    }

    public function update(Request $request, Raza $raza)
    {
        //
        $raza->update($request->all());
        return redirect()->route('admin.razas.edit', $raza)->with('info', 'Modificacion realizada');
    }

    public function destroy(Raza $raza)
    {
        //
        $raza->delete();
        return redirect()->route('admin.razas.index', $raza)->with('info', 'Eliminado con exito!');
    }
}
