// public/js/FuncionModal.js
document.getElementById("btnAbrirModal").addEventListener("click", function () {
    var myModal = new bootstrap.Modal(document.getElementById('modalSubir'));
    myModal.show();
});

document.getElementById("btnMantenimiento").addEventListener("click", function () {
    var myModal = new bootstrap.Modal(document.getElementById('modalMantenimiento'));
    myModal.show();
});

document.getElementById('btnModalSubirExcel').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('modalSubirExcel'));
    myModal.show();
});


