<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ArchivosService;
class VadminController extends Controller
{
    protected $archivosService;

    public function __construct(ArchivosService $archivosService)
    {
        $this->archivosService = $archivosService;
    }
    public function index_vadmin()
    {
        // Obtener la lista de archivos del servicio
        $datosYArchivos = $this->archivosService->obtenerArchivosExcel();

        $archivos = $datosYArchivos['archivos'];
        // Renderizar la vista y pasar los archivos
        return view("vadmin", compact('archivos'));
    }
}
