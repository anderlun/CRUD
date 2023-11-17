<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use PDF;

class ExportarController extends Controller
{
    public function exportarPDF($id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            abort(404);
        }

        $pdf = PDF::loadView('personas.pdf', ['persona' => $persona]);
        return $pdf->download('persona_' .$persona->id . '.pdf');
    }
}
