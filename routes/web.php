<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\ExportarController;

Route::resource('personas', MiControlador::class);

Route::get('/', function () {
    return redirect()->route('personas.index');
});

// Corrige el nombre de la acción a 'pdf'
Route::get('personas/{id}/pdf', [ExportarController::class, 'exportarPDF'])->name('personas.pdf');



