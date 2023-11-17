@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg">
        <h1 class="text-3xl font-semibold mb-6">Crear Persona</h1>

        <form action="{{ route('personas.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-600">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required
                       class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="cedula" class="block text-sm font-medium text-gray-600">Cedula:</label>
                <input type="text" name="cedula" id="cedula" required
                       class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-600">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" required
                       class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-600">Dirección:</label>
                <input type="text" name="direccion" id="direccion" required
                       class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>

            <div>
                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Guardar
                </button>
            </div>
        </form>
    </div>
@endsection

