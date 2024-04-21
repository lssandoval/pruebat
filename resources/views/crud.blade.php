<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Lista Bienes ESBYE</h1>

    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir</button>

    <x-modal-registrar />

    <form action="{{ route('buscar.en.base') }}" method="GET" class="mb-3" id="formularioBusqueda">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar por Código Bien..." name="termino">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </div>
    </form>

    <!-- <button class="btn btn-primary" id="btnModalSubirExcel">Subir Excel</button> -->
    <!-- <button class="btn btn-danger" id="btnAbrirModalElegir">👽</button> -->
    <table class="table table-responsive" id="tablaOriginal">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código Bien</th>
                <th scope="col">Código Anterior</th>
                <th scope="col">Identificador</th>
                <th scope="col">Nro de Acta/Matriz</th>
                <th scope="col">(BLD) o (BCA)</th>
                <th scope="col">Bien</th>
                <th scope="col">Serie/Identificación</th>
                <th scope="col">Modelo/Características</th>
                <th scope="col">Marca/Otros</th>
                <th scope="col">Crítico</th>
                <th scope="col">Moneda</th>
                <th scope="col">Valor de Compra</th>
                <th scope="col">Recompra</th>
                <th scope="col">Color</th>
                <th scope="col">Material</th>
                <th scope="col">Dimensiones</th>
                <th scope="col">Condición del Bien</th>
                <th scope="col">Habilitado</th>
                <th scope="col">Estado Bien</th>
                <th scope="col">Id Bodega</th>
                <th scope="col">Bodega</th>
                <th scope="col">Id Ubicación</th>
                <th scope="col">Ubicación de Bodega</th>
                <th scope="col">Nro de Cédula/RUC</th>
                <th scope="col">Custodio Actual</th>
                <th scope="col">Custodio Activo</th>
                <th scope="col">Origen del Ingreso</th>
                <th scope="col">Tipo de Ingreso</th>
                <th scope="col">Nro de Compromiso</th>
                <th scope="col">Estado del Acta</th>
                <th scope="col">Contabilizado del Acta</th>
                <th scope="col">Contabilizado del Bien</th>
                <th scope="col">Descripción</th>
                <th scope="col">Item/Renglón</th>
                <th scope="col">Cuenta Contable</th>
                <th scope="col">Depreciable</th>
                <th scope="col">Fecha de Creación</th>
                <th scope="col">Fecha de Ingreso</th>
                <th scope="col">Fecha Última Depreciación</th>
                <th scope="col">Vida Útil</th>
                <th scope="col">Fecha Término Depreciación</th>
                <th scope="col">Valor Contable</th>
                <th scope="col">Valor Residual</th>
                <th scope="col">Valor en Libros</th>
                <th scope="col">Valor Depreciación Acumulada</th>
                <th scope="col">Comodato</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($datos as $index => $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->codigo_bien }}</td>
                <td>{{ $item->codigo_anterior }}</td>
                <td>{{ $item->identificador }}</td>
                <td>{{ $item->nro_acta_matriz }}</td>
                <td>{{ $item->bld_bca }}</td>
                <td>{{ $item->bien }}</td>
                <td>{{ $item->serie_identificacion }}</td>
                <td>{{ $item->modelo_caracteristicas }}</td>
                <td>{{ $item->marca_otros }}</td>
                <td>{{ $item->critico }}</td>
                <td>{{ $item->moneda }}</td>
                <td>{{ $item->valor_compra }}</td>
                <td>{{ $item->recompra }}</td>
                <td>{{ $item->color }}</td>
                <td>{{ $item->material }}</td>
                <td>{{ $item->dimensiones }}</td>
                <td>{{ $item->condicion_bien }}</td>
                <td>{{ $item->habilitado }}</td>
                <td>{{ $item->estado_bien }}</td>
                <td>{{ $item->id_bodega }}</td>
                <td>{{ $item->bodega }}</td>
                <td>{{ $item->id_ubicacion }}</td>
                <td>{{ $item->ubicacion_bodega }}</td>
                <td>{{ $item->nro_cedula_ruc }}</td>
                <td>{{ $item->custodio_actual }}</td>
                <td>{{ $item->custodio_activo }}</td>
                <td>{{ $item->origen_ingreso }}</td>
                <td>{{ $item->tipo_ingreso }}</td>
                <td>{{ $item->nro_compromiso }}</td>
                <td>{{ $item->estado_acta }}</td>
                <td>{{ $item->contabilizado_acta }}</td>
                <td>{{ $item->contabilizado_bien }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->item_renglon }}</td>
                <td>{{ $item->cuenta_contable }}</td>
                <td>{{ $item->depreciable }}</td>
                <td>{{ $item->fecha_creacion }}</td>
                <td>{{ $item->fecha_ingreso }}</td>
                <td>{{ $item->fecha_ultima_depreciacion }}</td>
                <td>{{ $item->vida_util }}</td>
                <td>{{ $item->fecha_termino_depreciacion }}</td>
                <td>{{ $item->valor_contable }}</td>
                <td>{{ $item->valor_residual }}</td>
                <td>{{ $item->valor_en_libros }}</td>
                <td>{{ $item->valor_depreciacion_acumulada }}</td>
                <td>{{ $item->comodato }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar{{ $index }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ url('/eliminarBien/' . $item->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $index }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                    </form>
                </td>
                <!-- Modal Modificar CampAos-->
                <div class="modal fade" id="modalEditar{{ $index }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('modificarBien/' . $item->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <!-- Primera columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputid1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtidM" value="{{ $item->id }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputCodigo1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtcodigoM" value="{{ $item->codigo }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputNombre1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtnombreM" value="{{ $item->nombre }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputSaldoAnterior1" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtsaldoanteriorM" value="{{ $item->saldoanterior }}">
                                            </div>
                                        </div>
                                        <!-- Segunda columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputDebito1" class="form-label">Debito</label>
                                                <input type="text" class="form-control" name="txtdebitoM" value="{{ $item->debito }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputCredito1" class="form-label">Credito</label>
                                                <input type="text" class="form-control" name="txtcreditoM" value="{{ $item->credito }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputSaldoActual1" class="form-label">Saldo
                                                    Actual</label>
                                                <input type="text" class="form-control" name="txtsaldoactualM" value="{{ $item->saldoactual }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botones de acción -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container" style="display: none;">
        <h2>Resultados de la Búsqueda</h2>
        <a href="/crud">
            <i class="fa-solid fa-arrow-left"></i> Regresar Tabla Principal
        </a>
        <table class="table table-responsive d-none" id="tablaResultados">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Código Bien</th>
                    <th scope="col">Código Anterior</th>
                    <th scope="col">Identificador</th>
                    <th scope="col">Nro de Acta/Matriz</th>
                    <th scope="col">(BLD) o (BCA)</th>
                    <th scope="col">Bien</th>
                    <th scope="col">Serie/Identificación</th>
                    <th scope="col">Modelo/Características</th>
                    <th scope="col">Marca/Otros</th>
                    <th scope="col">Crítico</th>
                    <th scope="col">Moneda</th>
                    <th scope="col">Valor de Compra</th>
                    <th scope="col">Recompra</th>
                    <th scope="col">Color</th>
                    <th scope="col">Material</th>
                    <th scope="col">Dimensiones</th>
                    <th scope="col">Condición del Bien</th>
                    <th scope="col">Habilitado</th>
                    <th scope="col">Estado Bien</th>
                    <th scope="col">Id Bodega</th>
                    <th scope="col">Bodega</th>
                    <th scope="col">Id Ubicación</th>
                    <th scope="col">Ubicación de Bodega</th>
                    <th scope="col">Nro de Cédula/RUC</th>
                    <th scope="col">Custodio Actual</th>
                    <th scope="col">Custodio Activo</th>
                    <th scope="col">Origen del Ingreso</th>
                    <th scope="col">Tipo de Ingreso</th>
                    <th scope="col">Nro de Compromiso</th>
                    <th scope="col">Estado del Acta</th>
                    <th scope="col">Contabilizado del Acta</th>
                    <th scope="col">Contabilizado del Bien</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Item/Renglón</th>
                    <th scope="col">Cuenta Contable</th>
                    <th scope="col">Depreciable</th>
                    <th scope="col">Fecha de Creación</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fecha Última Depreciación</th>
                    <th scope="col">Vida Útil</th>
                    <th scope="col">Fecha Término Depreciación</th>
                    <th scope="col">Valor Contable</th>
                    <th scope="col">Valor Residual</th>
                    <th scope="col">Valor en Libros</th>
                    <th scope="col">Valor Depreciación Acumulada</th>
                    <th scope="col">Comodato</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if(isset($resultados) && count($resultados) > 0)
                @foreach ($resultados as $resultado)
                <tr>
                    <td>{{ $resultado->id }}</td>
                    <td>{{ $resultado->codigo_bien }}</td>
                    <td>{{ $resultado->codigo_anterior }}</td>
                    <td>{{ $resultado->identificador }}</td>
                    <td>{{ $resultado->nro_acta_matriz }}</td>
                    <td>{{ $resultado->bld_bca }}</td>
                    <td>{{ $resultado->bien }}</td>
                    <td>{{ $resultado->serie_identificacion }}</td>
                    <td>{{ $resultado->modelo_caracteristicas }}</td>
                    <td>{{ $resultado->marca_otros }}</td>
                    <td>{{ $resultado->critico }}</td>
                    <td>{{ $resultado->moneda }}</td>
                    <td>{{ $resultado->valor_compra }}</td>
                    <td>{{ $resultado->recompra }}</td>
                    <td>{{ $resultado->color }}</td>
                    <td>{{ $resultado->material }}</td>
                    <td>{{ $resultado->dimensiones }}</td>
                    <td>{{ $resultado->condicion_bien }}</td>
                    <td>{{ $resultado->habilitado }}</td>
                    <td>{{ $resultado->estado_bien }}</td>
                    <td>{{ $resultado->id_bodega }}</td>
                    <td>{{ $resultado->bodega }}</td>
                    <td>{{ $resultado->id_ubicacion }}</td>
                    <td>{{ $resultado->ubicacion_bodega }}</td>
                    <td>{{ $resultado->nro_cedula_ruc }}</td>
                    <td>{{ $resultado->custodio_actual }}</td>
                    <td>{{ $resultado->custodio_activo }}</td>
                    <td>{{ $resultado->origen_ingreso }}</td>
                    <td>{{ $resultado->tipo_ingreso }}</td>
                    <td>{{ $resultado->nro_compromiso }}</td>
                    <td>{{ $resultado->estado_acta }}</td>
                    <td>{{ $resultado->contabilizado_acta }}</td>
                    <td>{{ $resultado->contabilizado_bien }}</td>
                    <td>{{ $resultado->descripcion }}</td>
                    <td>{{ $resultado->item_renglon }}</td>
                    <td>{{ $resultado->cuenta_contable }}</td>
                    <td>{{ $resultado->depreciable }}</td>
                    <td>{{ $resultado->fecha_creacion }}</td>
                    <td>{{ $resultado->fecha_ingreso }}</td>
                    <td>{{ $resultado->fecha_ultima_depreciacion }}</td>
                    <td>{{ $resultado->vida_util }}</td>
                    <td>{{ $resultado->fecha_termino_depreciacion }}</td>
                    <td>{{ $resultado->valor_contable }}</td>
                    <td>{{ $resultado->valor_residual }}</td>
                    <td>{{ $resultado->valor_en_libros }}</td>
                    <td>{{ $resultado->valor_depreciacion_acumulada }}</td>
                    <td>{{ $resultado->comodato }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar{{ $index }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ url('/eliminarBien/' . $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $index }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="Número de columnas">No se encontraron resultados para tu búsqueda.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!--<div class="modal fade" id="modalSubirExcel" tabindex="-1" aria-labelledby="modalSubirExcelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('upload.excel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSubirExcelLabel">Subir Archivo Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="excel_file" class="form-label">Seleccionar archivo Excel</label>
                            <input class="form-control" type="file" id="excel_file" name="excel_file" accept=".xlsx, .xls">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Subir Archivo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/ListarArchivo.js') }}"></script>
    <script src="{{ asset('js/FuncionModal.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var formularioBusqueda = document.getElementById("formularioBusqueda");
            var tablaResultados = document.getElementById("tablaResultados");
            var tablaOriginal = document.getElementById("tablaOriginal");

            formularioBusqueda.addEventListener("submit", function(event) {
                event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

                // Obtener el término de búsqueda del formulario
                var termino = document.querySelector("input[name='termino']").value;

                // Realizar la solicitud AJAX para buscar los resultados
                fetch("{{ route('buscar.en.base') }}?termino=" + termino)
                    .then(response => response.json())
                    .then(data => {
                        // Actualizar la tabla de resultados con los datos recibidos
                        actualizarTablaResultados(data.resultados);

                        // Mostrar el contenedor de resultados
                        document.querySelector('.container').style.display = 'block';
                    })
                    .catch(error => {
                        console.error('Error al buscar resultados:', error);
                    });
            });
            // Función para actualizar la tabla de resultados con los datos recibidos
            function actualizarTablaResultados(resultados) {
                var tbody = document.querySelector("#tablaResultados tbody");
                tbody.innerHTML = ''; // Limpiar contenido existente del cuerpo de la tabla

                // Iterar sobre los resultados y generar filas de tabla HTML
                resultados.forEach(function(resultado) {
                    var filaHTML = `
            <tr>
                <td>${resultado.id}</td>
                <td>${resultado.codigo_bien}</td>
                <td>${resultado.codigo_anterior}</td>
                <td>${resultado.identificador}</td>
                <td>${resultado.nro_acta_matriz}</td>
                <td>${resultado.bld_bca}</td>
                <td>${resultado.bien}</td>
                <td>${resultado.serie_identificacion}</td>
                <td>${resultado.modelo_caracteristicas}</td>
                <td>${resultado.marca_otros}</td>
                <td>${resultado.critico}</td>
                <td>${resultado.moneda}</td>
                <td>${resultado.valor_compra}</td>
                <td>${resultado.recompra}</td>
                <td>${resultado.color}</td>
                <td>${resultado.material}</td>
                <td>${resultado.dimensiones}</td>
                <td>${resultado.condicion_bien}</td>
                <td>${resultado.habilitado}</td>
                <td>${resultado.estado_bien}</td>
                <td>${resultado.id_bodega}</td>
                <td>${resultado.bodega}</td>
                <td>${resultado.id_ubicacion}</td>
                <td>${resultado.ubicacion_bodega}</td>
                <td>${resultado.nro_cedula_ruc}</td>
                <td>${resultado.custodio_actual}</td>
                <td>${resultado.custodio_activo}</td>
                <td>${resultado.origen_ingreso}</td>
                <td>${resultado.tipo_ingreso}</td>
                <td>${resultado.nro_compromiso}</td>
                <td>${resultado.estado_acta}</td>
                <td>${resultado.contabilizado_acta}</td>
                <td>${resultado.contabilizado_bien}</td>
                <td>${resultado.descripcion}</td>
                <td>${resultado.item_renglon}</td>
                <td>${resultado.cuenta_contable}</td>
                <td>${resultado.depreciable}</td>
                <td>${resultado.fecha_creacion}</td>
                <td>${resultado.fecha_ingreso}</td>
                <td>${resultado.fecha_ultima_depreciacion}</td>
                <td>${resultado.vida_util}</td>
                <td>${resultado.fecha_termino_depreciacion}</td>
                <td>${resultado.valor_contable}</td>
                <td>${resultado.valor_residual}</td>
                <td>${resultado.valor_en_libros}</td>
                <td>${resultado.valor_depreciacion_acumulada}</td>
                <td>${resultado.comodato}</td>
                <td>
                    <!-- Botones y modal para modificar y eliminar -->
                </td>
            </tr>
        `;
                    tbody.innerHTML += filaHTML; // Agregar la fila a la tabla
                });

                // Mostrar la tabla de resultados
                tablaResultados.classList.remove("d-none");
                tablaOriginal.classList.add("d-none");
            }

        });
    </script>

</body>

</html>