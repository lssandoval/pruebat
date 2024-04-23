<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use Illuminate\Support\Facades\DB;

class MantenimientoController extends Controller
{
    // Método para mostrar los mantenimientos existentes de un bien
    public function mostrarMantenimientos($id)
    {
        $mantenimientos = Mantenimiento::where('id_nuevat', $id)->get();
        return view('lista', ['mantenimientos' => $mantenimientos]);
    }

    // Método para procesar el formulario de agregar un nuevo mantenimiento
    public function agregarMantenimiento(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'txtcodigo_bienR' => 'required',
            'tipo_mantenimiento' => 'required',
            'observacion_mantenimiento' => 'required',
            'recomendacion_mantenimiento' => 'required',
            'fecha_mantenimiento' => 'required|date',
            'tecnico_mantenimiento' => 'required',
            // Agrega aquí las reglas de validación para los otros campos si es necesario
        ]);

        // Obtener el código del bien desde el formulario
        $codigo_bien = $request->input('txtcodigo_bienR');

        // Obtener el id_nuevat correspondiente al código_bien
        $id_nuevat = DB::table('nuevat')->where('codigo_bien', $codigo_bien)->value('id');

        // Si el id_nuevat no se encuentra, puedes manejarlo de acuerdo a tus necesidades
        if (!$id_nuevat) {
            return redirect()->back()->with('error', 'El código de bien no existe.');
        }

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
            'recomendacion_mantenimiento' => $request->input('recomendacion_mantenimiento'),
            'fecha_mantenimiento' => $request->input('fecha_mantenimiento'),
            'tecnico_mantenimiento' => $request->input('tecnico_mantenimiento'),
            // Agrega aquí los otros campos del formulario
        ]);

        // Redireccionar o devolver una respuesta JSON según sea necesario
        return redirect()->back()->with('success', 'Mantenimiento registrado correctamente');
    }

    // Otros métodos del controlador...
}
