<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Transaccion;
use Illuminate\Support\Facades\View;

use App\Services\ArchivosService;

class ExcelController extends Controller
{
    public function upload(Request $request)
    {
        // Verificar si se ha subido un archivo
        if ($request->hasFile('excel_file')) {
            // Obtener el archivo subido
            $file = $request->file('excel_file');

            // Verificar si el archivo es un archivo Excel válido
            $extension = $file->getClientOriginalExtension();
            if ($extension === 'xlsx' || $extension === 'xls') {
                // Obtener la ruta temporal del archivo
                $filePath = $file->getRealPath();

                // Crear un objeto lector de PhpSpreadsheet utilizando la fábrica IOFactory
                $reader = IOFactory::createReader('Xlsx');

                // Cargar el archivo Excel en un objeto Spreadsheet
                $spreadsheet = $reader->load($filePath);
                $worksheet = $spreadsheet->getActiveSheet();

                // Iterar sobre cada fila en la hoja de cálculo del archivo Excel
                foreach ($worksheet->getRowIterator() as $row) {
                    $data = [];
                    foreach ($row->getCellIterator() as $cell) {
                        $data[] = $cell->getValue();
                    }

                    // Verificar si el primer valor (código) no está vacío y si el array $data tiene al menos 46 elementos
                    if (!empty($data[0]) && count($data) >= 46) {
                        // Crear una nueva instancia del modelo Transaccion
                        $transaccion = new Transaccion();
                        // Asignar los valores de la fila al modelo
                        $transaccion->codigo_bien = $data[0];
                        $transaccion->codigo_anterior = $data[1];
                        $transaccion->identificador = $data[2];
                        $transaccion->nro_acta_matriz = $data[3];
                        $transaccion->bld_bca = $data[4];
                        $transaccion->bien = $data[5];
                        $transaccion->serie_identificacion = $data[6];
                        $transaccion->modelo_caracteristicas = $data[7];
                        $transaccion->marca_otros = $data[8];
                        $transaccion->critico = $data[9];
                        $transaccion->moneda = $data[10];
                        $transaccion->valor_compra = $data[11];
                        $transaccion->recompra = $data[12];
                        $transaccion->color = $data[13];
                        $transaccion->material = $data[14];
                        $transaccion->dimensiones = $data[15];
                        $transaccion->condicion_bien = $data[16];
                        $transaccion->habilitado = $data[17];
                        $transaccion->estado_bien = $data[18];
                        $transaccion->id_bodega = $data[19];
                        $transaccion->bodega = $data[20];
                        $transaccion->id_ubicacion = $data[21];
                        $transaccion->ubicacion_bodega = $data[22];
                        $transaccion->nro_cedula_ruc = $data[23];
                        $transaccion->custodio_actual = $data[24];
                        $transaccion->custodio_activo = $data[25];
                        $transaccion->origen_ingreso = $data[26];
                        $transaccion->tipo_ingreso = $data[27];
                        $transaccion->nro_compromiso = $data[28];
                        $transaccion->estado_acta = $data[29];
                        $transaccion->contabilizado_acta = $data[30];
                        $transaccion->contabilizado_bien = $data[31];
                        $transaccion->descripcion = $data[32];
                        $transaccion->item_renglon = $data[33];
                        $transaccion->cuenta_contable = $data[34];
                        $transaccion->depreciable = $data[35];
                        $transaccion->fecha_creacion = $data[36];
                        $transaccion->fecha_ingreso = $data[37];
                        $transaccion->fecha_ultima_depreciacion = $data[38];
                        $transaccion->vida_util = $data[39];
                        $transaccion->fecha_termino_depreciacion = $data[40];
                        $transaccion->valor_contable = $data[41];
                        $transaccion->valor_residual = $data[42];
                        $transaccion->valor_en_libros = $data[43];
                        $transaccion->valor_depreciacion_acumulada = $data[44];
                        $transaccion->comodato = $data[45];

                        // Guardar el modelo en la base de datos
                        $transaccion->save();
                    }
                }

                // Mover el archivo al directorio public/Excels
                $file->storeAs(storage_path('app/public/Excels'), $file->getClientOriginalName());

                // Después de guardar el modelo en la base de datos, redireccionar al usuario a otra página
                return redirect('/crud')->with('success', '¡El archivo Excel se ha cargado exitosamente!');
            }
        }

        // Retornar una respuesta de error si no se proporcionó un archivo válido
        return response()->json(['error' => 'Por favor, asegúrate de subir un archivo Excel válido con extensión .xlsx o .xls.'], 400);
    }
}
