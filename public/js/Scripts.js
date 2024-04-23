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


//mostrar mantenimientos

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
    $('.mostrarMantenimientosBtn').click(function () {
        var idBien = $(this).data('id');
        console.log("ID del Bien:", idBien); // Agregar esta línea para imprimir en la consola
        $.ajax({
            url: '/mantenimientos/' + idBien + '/mostrar',
            method: 'GET',
            success: function (response) {
                $('#mantenimientosContainer').html(response);
                $('#modalMostrarMantenimientos').modal('show'); // Aquí se abre el nuevo modal
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    });
});