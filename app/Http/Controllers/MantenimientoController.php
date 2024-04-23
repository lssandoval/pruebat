<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;

class MantenimientoController extends Controller
{
    // Método para manejar el envío de información desde el formulario de mantenimiento
    public function store(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'tipo_mantenimiento' => 'required',
            'observacion_mantenimiento' => 'required',
            // Agrega aquí las reglas de validación para los otros campos si es necesario
        ]);

        // Obtener el ID del bien asociado al mantenimiento desde el formulario
        $id_nuevat = $request->input('id_nuevat');

        // Obtener el último número de mantenimiento para el bien específico
        $ultimoMantenimiento = Mantenimiento::where('id_nuevat', $id_nuevat)->max('id_mantenimiento');

        // Incrementar el número de mantenimiento
        $nuevoMantenimiento = $ultimoMantenimiento + 1;

        // Formatear el número de mantenimiento (agregar ceros a la izquierda si es necesario)
        $numeroMantenimientoFormateado = sprintf("%03d", $nuevoMantenimiento);

        // Guardar los datos del mantenimiento en la base de datos
        Mantenimiento::create([
            'id_mantenimiento' => $numeroMantenimientoFormateado,
            'id_nuevat' => $id_nuevat,
            'tipo_mantenimiento' => $request->input('tipo_mantenimiento'),
            'observacion_mantenimiento' => $request->input('observacion_mantenimiento'),
            // Agrega aquí los otros campos del formulario
        ]);

        // Redireccionar o devolver una respuesta JSON según sea necesario
        return redirect()->back()->with('success', 'Mantenimiento registrado correctamente');
    }
}