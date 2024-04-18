// public/js/ListarArchivo.js

document.getElementById("btnAbrirModalElegir").addEventListener("click", function() {
    var myModal = new bootstrap.Modal(document.getElementById('modalElegir'));
    myModal.show();
});

document.addEventListener("DOMContentLoaded", function() {
    var elementosArchivo = document.querySelectorAll('.archivo');

    elementosArchivo.forEach(function(elemento) {
        elemento.addEventListener('click', function(evento) {
            evento.preventDefault();
            var nombreArchivo = this.dataset.nombre;
            cargarContenidoArchivo(nombreArchivo);
        });
    });

    function cargarContenidoArchivo(nombreArchivo) {
        document.getElementById('contenidoArchivoSeleccionado').innerHTML = 'Archivo seleccionado: ' + nombreArchivo;
    }
});
