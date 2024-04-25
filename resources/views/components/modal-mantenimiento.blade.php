<div class="modal fade" id="modalMantenimiento" tabindex="-1" role="dialog" aria-labelledby="modalMantenimientoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMantenimientoLabel">Registrar Mantenimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para asignar valores a los campos de mantenimiento -->
                <form id="formMantenimiento" action="{{ route('mantenimiento.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="codigoBien" class="form-label">Código Bien</label>
                        <input type="text" class="form-control" id="codigoBien" name="txtcodigo_bienR">
                    </div>
                    <div class="form-group">
                        <label for="tipoMantenimiento">Tipo de Mantenimiento</label>
                        <select class="form-control" id="tipoMantenimiento" name="tipo_mantenimiento">
                            <option value="">Seleccionar</option>
                            <option value="preventivo">Preventivo</option>
                            <option value="correctivo">Correctivo</option>
                        </select>
                    </div>
                    <div id="detalleMantenimiento" style="display: none;">
                        <div class="form-group">
                            <label for="detallePreventivo">Detalle de Mantenimiento Preventivo</label>
                            <select class="form-control" id="detallePreventivo" name="detalle_preventivo">
                                <option value="">Seleccionar</option>
                                <option value="fuera_vigencia">Mantenimiento a equipos fuera de vigencia tecnológica</option>
                                <option value="dentro_vigencia">Mantenimiento a equipos dentro de vigencia tecnológica</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacionMantenimiento">Observación</label>
                        <textarea class="form-control" id="observacionMantenimiento" name="observacion_mantenimiento"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recomendacionMantenimiento">Recomendación</label>
                        <textarea class="form-control" id="recomendacionMantenimiento" name="recomendacion_mantenimiento"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fechaMantenimiento">Fecha de Mantenimiento</label>
                        <input type="date" class="form-control" id="fechaMantenimiento" name="fecha_mantenimiento">
                    </div>
                    <div class="form-group">
                        <label for="tecnicoMantenimiento">Técnico de Mantenimiento</label>
                        <input type="text" class="form-control" id="tecnicoMantenimiento" name="tecnico_mantenimiento">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="guardarMantenimiento">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>