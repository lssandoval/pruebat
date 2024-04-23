<div class="modal fade" id="modalMostrarMantenimientos" tabindex="-1" role="dialog" aria-labelledby="modalMostrarMantenimientosLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMostrarMantenimientosLabel">Mantenimientos Realizados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="mantenimientosContainer">
                @foreach($mantenimientos as $mantenimiento)
                <div class="card mb-3">
                    <div class="card-header">Mantenimiento {{ $mantenimiento->id_mantenimiento }}</div>
                    <div class="card-body">
                        <p>Tipo de Mantenimiento: {{ $mantenimiento->tipo_mantenimiento }}</p>
                        <p>Observación: {{ $mantenimiento->observacion_mantenimiento }}</p>
                        <p>Recomendación: {{ $mantenimiento->recomendacion_mantenimiento }}</p>
                        <p>Fecha de Mantenimiento: {{ $mantenimiento->fecha_mantenimiento }}</p>
                        <p>Técnico de Mantenimiento: {{ $mantenimiento->tecnico_mantenimiento }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>