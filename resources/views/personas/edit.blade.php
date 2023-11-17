@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg">
        <h1 class="text-3xl font-semibold mb-6">Editar Persona</h1>
        <form action="{{ route('personas.update', $persona->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" value="{{ $persona->nombre }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue">
            </div>
            <div class="mb-4">
                <label for="cedula" class="block text-gray-700 text-sm font-bold mb-2">Cedula:</label>
                <input type="text" name="cedula" value="{{ $persona->cedula }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue">
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                <input type="text" name="telefono" value="{{ $persona->telefono }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue">
            </div>
            <div class="mb-4">
                <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                <input type="text" name="direccion" value="{{ $persona->direccion }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue">
            </div>
            <div>
                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
@endsection
