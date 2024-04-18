<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ListarDocumentosController extends Controller
{
    public function listar()
    {
        // Obtener la lista de archivos Excel
        $archivos = $this->obtenerArchivosExcel();

        // Renderizar la vista y pasar los archivos
        return view('vadmin', compact('archivos'));
    }
    protected function obtenerArchivosExcel()
    {
        $directorio = public_path('excels');
        $archivos = scandir($directorio);

        // Filtrar solo los archivos y excluir los directorios "." y ".."
        $archivos = array_filter($archivos, function ($archivo) {
            return is_file(public_path('excels/' . $archivo)) && $archivo != '.' && $archivo != '..';
        });

        return $archivos;
    }
}
