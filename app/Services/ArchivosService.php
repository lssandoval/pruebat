<?php
// app/Services/ArchivosService.php

namespace App\Services;

use App\Models\Transaccion;

class ArchivosService
{
    public function obtenerArchivosExcel()
    {
        $datos = Transaccion::orderBy('id', 'asc')->get();

        $directorio = public_path('excels');
        $archivos = scandir($directorio);

        // Filtrar solo los archivos y excluir los directorios "." y ".."
        $archivos = array_filter($archivos, function ($archivo) {
            return is_file(public_path('excels/' . $archivo)) && $archivo != '.' && $archivo != '..';
        });
        return [
            'datos' => $datos,
            'archivos' => $archivos
        ];
    }
}
