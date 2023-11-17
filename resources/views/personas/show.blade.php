@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg">
        <h1 class="text-3xl font-semibold mb-6">Detalles de Persona</h1>
        <div>
            <p><strong class="text-lg">Nombre:</strong> {{ $persona->nombre }}</p>
            <p><strong class="text-lg">Cedula:</strong> {{ $persona->cedula }}</p>
            <p><strong class="text-lg">Teléfono:</strong> {{ $persona->telefono }}</p>
            <p><strong class="text-lg">Dirección:</strong> {{ $persona->direccion }}</p>
        </div>
        <!-- Botón de Descarga de PDF -->
        <form action="{{ route('personas.pdf', $persona->id) }}" method="get">
            @csrf
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                Descargar PDF
            </button>
        </form>

        <div class="mt-4">
            <a href="{{ route('personas.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Volver al Listado
            </a>
        </div>
    </div>
@endsection
    