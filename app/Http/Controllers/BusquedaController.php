<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaccion;
use App\Http\Controllers\CrudController;

class BusquedaController extends Controller
{
    protected $crudController;

    public function __construct(CrudController $crudController)
    {
        $this->crudController = $crudController;
    }

    public function buscar(Request $request)
    {
        // Obtener el término de búsqueda del formulario
        $termino = $request->input('termino');

        // Realizar la consulta Eloquent para buscar transacciones que coincidan con el término
        $resultados = Transaccion::where('codigo_bien', 'like', "%$termino%")
            ->orWhere('bien', 'like', "%$termino%")
            ->orWhere('descripcion', 'like', "%$termino%")
            ->get();

        // Devolver los resultados de la búsqueda en formato JSON
        return response()->json(['resultados' => $resultados]);
    }
}
