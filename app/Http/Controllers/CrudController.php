<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaccion;

use App\Services\ArchivosService;

class CrudController extends Controller
{
    protected $archivosService;

    public function __construct(ArchivosService $archivosService)
    {
        $this->archivosService = $archivosService;
    }
    public function obtenerDatosYArchivosExcel()
    {
        return $this->archivosService->obtenerArchivosExcel();
    }
    public function index(Request $request)
    {
        // Obtener todos los datos originales
        $datosYArchivos = $this->archivosService->obtenerArchivosExcel();
        $datos = $datosYArchivos['datos'];
        $archivos = $datosYArchivos['archivos'];

        // Verificar si se realizó una búsqueda
        if ($request->has('termino')) {
            // Procesar la búsqueda
            $termino = $request->input('termino');
            $resultados = Transaccion::where('codigo_bien', 'like', "%$termino%")
                ->orWhere('bien', 'like', "%$termino%")
                ->orWhere('descripcion', 'like', "%$termino%")
                ->get();

            // Mostrar los resultados de la búsqueda en la misma vista
            return view('crud', compact('resultados', 'termino', 'archivos',));
        }

        // Mostrar todos los datos originales
        return view('crud', compact('datos', 'archivos'));
    }

    public function create(Request $request)
    {
        $transaccion = new Transaccion();
        $transaccion->codigo_bien = $request->txtcodigo_bienR;
        $transaccion->codigo_anterior = $request->txtcodidgo_anteriorR;
        $transaccion->identificador = $request->txtidentificadorR;
        $transaccion->nro_acta_matriz = $request->txtnro_acta_matrizR;
        $transaccion->bld_bca = $request->txtbld_bcaR;
        $transaccion->bien = $request->txtbienR;
        $transaccion->serie_identificacion = $request->txtserie_identificacionR;
        $transaccion->modelo_caracteristicas = $request->txtmodelo_caracteristicasR;
        $transaccion->marca_otros = $request->txtmarca_otrosR;
        $transaccion->critico = $request->txtcriticoR;
        $transaccion->moneda = $request->txtmonedaR;
        $transaccion->valor_compra = $request->txtvalor_compraR;
        $transaccion->recompra = $request->txtrecompraR;
        $transaccion->color = $request->txtcolorR;
        $transaccion->material = $request->txtmaterialR;
        $transaccion->dimensiones = $request->txtdimensionesR;
        $transaccion->condicion_bien = $request->txtcondicion_bienR;
        $transaccion->habilitado = $request->txthabilitadoR;
        $transaccion->estado_bien = $request->txtestado_bienR;
        $transaccion->id_bodega = $request->txtid_bodegaR;
        $transaccion->bodega = $request->txtbodegaR;
        $transaccion->id_ubicacion = $request->txtid_ubicacionR;
        $transaccion->ubicacion_bodega = $request->txtubicacion_bodegaR;
        $transaccion->nro_cedula_ruc = $request->txtnro_cedula_rucR;
        $transaccion->custodio_actual = $request->txtcustodio_actualR;
        $transaccion->custodio_activo = $request->txtcustodio_activoR;
        $transaccion->origen_ingreso = $request->txtorigen_ingresoR;
        $transaccion->tipo_ingreso = $request->txttipo_ingresoR;
        $transaccion->nro_compromiso = $request->txtnro_compromisoR;
        $transaccion->estado_acta = $request->txtestado_actaR;
        $transaccion->contabilizado_acta = $request->txtcontabilizado_actaR;
        $transaccion->contabilizado_bien = $request->txtcontabilizado_bienR;
        $transaccion->descripcion = $request->txtdescripcionR;
        $transaccion->item_renglon = $request->txtitem_renglonR;
        $transaccion->cuenta_contable = $request->txtcuenta_contableR;
        $transaccion->depreciable = $request->txtdepreciableR;
        $transaccion->fecha_creacion = $request->txtfecha_creacionR;
        $transaccion->fecha_ingreso = $request->txtfecha_ingresoR;
        $transaccion->fecha_ultima_depreciacion = $request->txtfecha_ultima_depreciacionR;
        $transaccion->vida_util = $request->txtvida_utilR;
        $transaccion->fecha_termino_depreciacion = $request->txtfecha_termino_depreciacionR;
        $transaccion->valor_contable = $request->txtvalor_contableR;
        $transaccion->valor_residual = $request->txtvalor_residualR;
        $transaccion->valor_en_libros = $request->txtvalor_en_librosR;
        $transaccion->valor_depreciacion_acumulada = $request->txtvalor_depreciacion_acumuladaR;
        $transaccion->comodato = $request->txtcomodatoR;

        if ($transaccion->save()) {
            return back()->with("correcto", "Registro chido");
        } else {
            return back()->with("incorrecto", "No se registró");
        }
    }
    public function update(Request $request, $id)
    {
        // Encuentra la transacción que deseas actualizar por su ID
        $transaccion = Transaccion::find($id);

        // Verifica si la transacción existe
        if (!$transaccion) {
            return back()->with("incorrecto", "La transacción no existe");
        }

        // Actualiza los valores de la transacción con los datos del formulario
        $transaccion->id = $request->input('txtidM');
        $transaccion->codigo_bien = $request->input('txtcodigo_bienR');
        $transaccion->codigo_anterior = $request->input('txtcodidgo_anteriorR');
        $transaccion->identificador = $request->input('txtidentificadorR');
        $transaccion->nro_acta_matriz = $request->input('txtnro_acta_matrizR');
        $transaccion->bld_bca = $request->input('txtbld_bcaR');
        $transaccion->bien = $request->input('txtbienR');
        $transaccion->serie_identificacion = $request->input('txtserie_identificacionR');
        $transaccion->modelo_caracteristicas = $request->input('txtmodelo_caracteristicasR');
        $transaccion->marca_otros = $request->input('txtmarca_otrosR');
        $transaccion->critico = $request->input('txtcriticoR');
        $transaccion->moneda = $request->input('txtmonedaR');
        $transaccion->valor_compra = $request->input('txtvalor_compraR');
        $transaccion->recompra = $request->input('txtrecompraR');
        $transaccion->color = $request->input('txtcolorR');
        $transaccion->material = $request->input('txtmaterialR');
        $transaccion->dimensiones = $request->input('txtdimensionesR');
        $transaccion->condicion_bien = $request->input('txtcondicion_bienR');
        $transaccion->habilitado = $request->input('txthabilitadoR');
        $transaccion->estado_bien = $request->input('txtestado_bienR');
        $transaccion->id_bodega = $request->input('txtid_bodegaR');
        $transaccion->bodega = $request->input('txtbodegaR');
        $transaccion->id_ubicacion = $request->input('txtid_ubicacionR');
        $transaccion->ubicacion_bodega = $request->input('txtubicacion_bodegaR');
        $transaccion->nro_cedula_ruc = $request->input('txtnro_cedula_rucR');
        $transaccion->custodio_actual = $request->input('txtcustodio_actualR');
        $transaccion->custodio_activo = $request->input('txtcustodio_activoR');
        $transaccion->origen_ingreso = $request->input('txtorigen_ingresoR');
        $transaccion->tipo_ingreso = $request->input('txttipo_ingresoR');
        $transaccion->nro_compromiso = $request->input('txtnro_compromisoR');
        $transaccion->estado_acta = $request->input('txtestado_actaR');
        $transaccion->contabilizado_acta = $request->input('txtcontabilizado_actaR');
        $transaccion->contabilizado_bien = $request->input('txtcontabilizado_bienR');
        $transaccion->descripcion = $request->input('txtdescripcionR');
        $transaccion->item_renglon = $request->input('txtitem_renglonR');
        $transaccion->cuenta_contable = $request->input('txtcuenta_contableR');
        $transaccion->depreciable = $request->input('txtdepreciableR');
        $transaccion->fecha_creacion = $request->input('txtfecha_creacionR');
        $transaccion->fecha_ingreso = $request->input('txtfecha_ingresoR');
        $transaccion->fecha_ultima_depreciacion = $request->input('txtfecha_ultima_depreciacionR');
        $transaccion->vida_util = $request->input('txtvida_utilR');
        $transaccion->fecha_termino_depreciacion = $request->input('txtfecha_termino_depreciacionR');
        $transaccion->valor_contable = $request->input('txtvalor_contableR');
        $transaccion->valor_residual = $request->input('txtvalor_residualR');
        $transaccion->valor_en_libros = $request->input('txtvalor_en_librosR');
        $transaccion->valor_depreciacion_acumulada = $request->input('txtvalor_depreciacion_acumuladaR');
        $transaccion->comodato = $request->input('txtcomodatoR');

        // Guarda los cambios en la base de datos
        if ($transaccion->save()) {
            return back()->with("correcto", "Actualizada Correctamente");
        } else {
            return back()->with("incorrecto", "Error al actualizar");
        }
    }

    /*public function update(Request $request, $id)
    {
        // Encuentra el registro que deseas actualizar por su ID
        $transaccion = Transaccion::find($id);

        // Verifica si el registro existe
        if (!$transaccion) {
            return back()->with("error", "El registro no existe");
        }

        // Utiliza el método fill para asignar automáticamente los valores
        $transaccion->fill($request->only($transaccion->getFillable()));

        // Guarda los cambios en la base de datos
        if ($nuevat->save()) {
            return back()->with("success", "Registro actualizado correctamente");
        } else {
            return back()->with("error", "Error al actualizar el registro");
        }
    }*/

    public function delete($id)
    {
        // Encuentra la transacción que deseas eliminar por su ID
        $transaccion = Transaccion::find($id);
        // Verifica si la transacción existe
        if (!$transaccion) {
            return back()->with("incorrecto", "La transacción no existe");
        }
        // Elimina la transacción
        $transaccion->delete();
        // Redirige de vuelta con un mensaje de éxito
        return back()->with("correcto", "Transacción eliminada correctamente");
    }


}
