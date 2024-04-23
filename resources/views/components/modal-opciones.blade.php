<div class="modal fade" id="myModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Título del Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button class="btn btn-primary btn-sm btnMantenimiento" data-bs-toggle="modal" data-bs-target="#modalMantenimiento" data-codigo-bien="{{ $item->codigo_bien }}">Mantenimientos</button>

                <form action="{{ route('mantenimientos.mostrar', ['id' => $item->id]) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Mostrar Mantenimientos
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <!-- Botones dentro del modal -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>