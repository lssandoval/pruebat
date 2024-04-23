document.addEventListener("DOMContentLoaded", function () {
    // Funciones para manejar modales
    document.getElementById("btnAbrirModal").addEventListener("click", function () {
        abrirModal('modalSubir');
    });

    document.getElementById("btnMantenimiento").addEventListener("click", function () {
        abrirModal('modalMantenimiento');
    });

    document.getElementById('btnModalSubirExcel').addEventListener('click', function () {
        abrirModal('modalSubirExcel');
    });

    // Función para abrir un modal por su ID
    function abrirModal(idModal) {
        var modal = new bootstrap.Modal(document.getElementById(idModal));
        modal.show();
    }

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
    var codigoBien = button.data('codigo-bien'); // Extract codigo-bien from data-* attributes
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
function openMantenimientoModal() {
    $('#modalMantenimiento').modal('show');
}