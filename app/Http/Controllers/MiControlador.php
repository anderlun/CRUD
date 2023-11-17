<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class MiControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|max:255',
            'cedula' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'required|max:255',
        ]);

        // Crear una nueva persona con los datos validados
        Persona::create([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ]);

        // Redireccionar a la vista de listado de personas
        return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());
        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }

}
