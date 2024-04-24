<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@include('components.modal-lista-mantenimientos')

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
                <button class="btn btn-primary btn-sm btnMostrarMantenimientos" data-id="{{ $item->id }}">Mostrar Mantenimientos</button>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>