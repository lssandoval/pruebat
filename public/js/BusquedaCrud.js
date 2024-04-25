document.addEventListener("DOMContentLoaded", function () {
    var formularioBusqueda = document.getElementById("formularioBusqueda");
    var tablaResultados = document.getElementById("tablaResultados");
    var tablaOriginal = document.getElementById("tablaOriginal");

    formularioBusqueda.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

        // Obtener el término de búsqueda del formulario
        var termino = document.querySelector("input[name='termino']").value;

        // Realizar la solicitud AJAX para buscar los resultados
        fetch(buscarEnBaseUrl + "?termino=" + termino)
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
        resultados.forEach(function (resultado) {
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