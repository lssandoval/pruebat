src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
document.addEventListener("DOMContentLoaded", function () {
    // Función para abrir un modal por su ID
    function abrirModal(idModal) {
        var modal = new bootstrap.Modal(document.getElementById(idModal));
        modal.show();
    }

    document.querySelectorAll('.btnAbrirOpciones').forEach(function (button) {
        button.addEventListener('click', function () {
            var targetModal = this.dataset.target;
            var modal = new bootstrap.Modal(document.querySelector(targetModal));
            modal.show();
        });
    });

    // Listener para el clic en el botón que abre el modal
    document.getElementById("btnAbrirModal").addEventListener("click", function () {
        abrirModal('modalOpcionesMantenimiento');
    });

    document.getElementById("btnMantenimiento").addEventListener("click", function () {
        abrirModal('modalMantenimiento');
    });

    document.getElementById('btnModalSubirExcel').addEventListener('click', function () {
        abrirModal('modalSubirExcel');
    });

    // Funciones para listar archivos
    document.getElementById("btnAbrirModalElegir").addEventListener("click", function () {
        abrirModal('modalElegir');
    });

    var elementosArchivo = document.querySelectorAll('.archivo');

    elementosArchivo.forEach(function (elemento) {
        elemento.addEventListener('click', function (evento) {
            evento.preventDefault();
            var nombreArchivo = this.dataset.nombre;
            cargarContenidoArchivo(nombreArchivo);
        });
    });

    function cargarContenidoArchivo(nombreArchivo) {
        document.getElementById('contenidoArchivoSeleccionado').innerHTML = 'Archivo seleccionado: ' + nombreArchivo;
    }

});
//TODO LO DE ABAJO ES PARA LOS MANTENIMIENTOS
//AÑADIR NUEVO MANTENIMIENTO
$('#modalMantenimiento').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var codigoBien = button.data('codigoBien'); // Extract codigoBien from data-* attributes
    var modal = $(this);
    modal.find('#codigoBien').val(codigoBien); // Set the value of codigoBien in the modal
});


$(document).ready(function () {
    $('#tipoMantenimiento').change(function () {
        var tipoMantenimiento = $(this).val();
        if (tipoMantenimiento === 'preventivo') {
            $('#detalleMantenimiento').show();
        } else {
            $('#detalleMantenimiento').hide();
        }
    });
});


//MOSTRAR MANTENIMIENTOS
$(document).ready(function () {
    $('#mostrarMantenimientosBtn').click(function () {
        var idBien = $(this).data('id');

        $.ajax({
            url: '/mantenimientos/' + idBien + '/mostrar',
            method: 'GET',
            success: function (response) {
                $('#mantenimientosContainer').html(response);
                $('#modalMostrarMantenimientos').modal('show');
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    });
});

$(document).ready(function () {
    $('.btnMostrarMantenimientos').click(function () {
        var idBien = $(this).data('id');
        console.log('xd' + idBien);
        $.ajax({
            url: '/mostrarMantenimientos/' + idBien + '/mostrar',
            method: 'GET',
            success: function (response) {
                mostrarModalMantenimientos(response);
                $('#modalMostrarMantenimientos').modal('show'); // Abrir el modal para mostrar los mantenimientos
                $('#myModal{{ $index }}').modal('hide'); // Cerrar el modal actual
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    });
});

function mostrarModalMantenimientos(data) {
    // Limpiar el contenedor de mantenimientos
    $('#mantenimientosContainer').empty();
    // Verificar si la respuesta contiene datos de mantenimiento
    if (data && data.mantenimientos && data.mantenimientos.length > 0) {
        // Iterar sobre los mantenimientos y construir las tarjetas de mantenimiento
        data.mantenimientos.forEach(function (mantenimiento) {
            var cardHtml = '<div class="card mb-3">';
            cardHtml += '<div class="card-header">Mantenimiento ' + mantenimiento.id_mantenimiento + '</div>';
            cardHtml += '<div class="card-body">';
            cardHtml += '<p>Tipo de Mantenimiento: ' + mantenimiento.tipo_mantenimiento + '</p>';
            cardHtml += '<p>Observación: ' + mantenimiento.observacion_mantenimiento + '</p>';
            cardHtml += '<p>Recomendación: ' + mantenimiento.recomendacion_mantenimiento + '</p>';
            cardHtml += '<p>Fecha de Mantenimiento: ' + mantenimiento.fecha_mantenimiento + '</p>';
            cardHtml += '<p>Técnico de Mantenimiento: ' + mantenimiento.tecnico_mantenimiento + '</p>';
            cardHtml += '</div></div>';

            // Agregar la tarjeta al contenedor
            $('#mantenimientosContainer').append(cardHtml);
            console.log('data' + cardHtml);
        });
    } else {
        // Si no hay datos de mantenimiento, mostrar un mensaje adecuado
        $('#mantenimientosContainer').html('<p>No se encontraron datos de mantenimiento para este elemento.</p>');
    }
}


