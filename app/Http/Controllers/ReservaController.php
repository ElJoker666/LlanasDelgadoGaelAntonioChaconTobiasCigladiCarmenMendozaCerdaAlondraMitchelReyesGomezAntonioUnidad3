<?php

namespace App\Http\Controllers;

use App\Models\Reservas;  // Asegúrate de importar el modelo correctamente
use Barryvdh\DomPDF\Facade as PDF;  // Si usas DomPDF para generar el PDF
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function generarFactura($id)
    {
        $reserva = Reservas::findOrFail($id);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('reservas.factura', compact('reserva'));
        return $pdf->download('factura_reserva_' . $reserva->id . '.pdf');
    }
}
