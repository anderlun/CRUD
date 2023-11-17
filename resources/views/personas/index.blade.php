@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg">
        <h1 class="text-3xl font-semibold mb-6">Listado de Personas</h1>
        
        @if(count($personas) > 0)
            <ul class="divide-y divide-gray-300">
                @foreach($personas as $persona)
                    <li class="py-4">
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-medium">{{ $persona->nombre }}</span>
                            <div class="space-x-4">
                                <a href="{{ route('personas.show', $persona->id) }}"
                                   class="text-blue-500 hover:underline">Detalles</a>
                                <a href="{{ route('personas.edit', $persona->id) }}"
                                   class="text-green-500 hover:underline">Editar</a>
                                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline focus:outline-none">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No hay personas registradas.</p>
        @endif

        <div class="mt-4">
            <a href="{{ route('personas.create') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Crear Nueva Persona
            </a>
        </div>
    </div>
@endsection
