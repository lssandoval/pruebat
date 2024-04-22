<!-- Modal Modificar CampAos-->
<div class="modal fade" id="modalEditar{{ $index }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('modificarBien/' . $item->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="codigo_bien1" class="form-label">codigo bien</label>
                                <input type="text" class="form-control" name="txtcodigo_bienR" value="{{ $item->codigo_bien }}">
                            </div>
                            <div class="mb-3">
                                <label for="codidgo_anterior1" class="form-label">codidgo anterior</label>
                                <input type="text" class="form-control" name="txtcodidgo_anteriorR" value="{{ $item->codigo_anterior }}">
                            </div>
                            <div class="mb-3">
                                <label for="identificador1" class="form-label">identificador</label>
                                <input type="text" class="form-control" name="txtidentificadorR" value="{{ $item->identificador }}">
                            </div>
                            <div class="mb-3">
                                <label for="nro_acta_matriz1" class="form-label">nro acta matriz</label>
                                <input type="text" class="form-control" name="txtnro_acta_matrizR" value="{{ $item->nro_acta_matriz }}">
                            </div>
                            <div class="mb-3">
                                <label for="bld_bca1" class="form-label">bld bca</label>
                                <input type="text" class="form-control" name="txtbld_bcaR" value="{{ $item->bld_bca }}">
                            </div>
                            <div class="mb-3">
                                <label for="bien1" class="form-label">bien</label>
                                <input type="text" class="form-control" name="txtbienR" value="{{ $item->bien }}">
                            </div>
                            <div class="mb-3">
                                <label for="serie_identificacion1" class="form-label">serie identificacion</label>
                                <input type="text" class="form-control" name="txtserie_identificacionR" value="{{ $item->serie_identificacion }}">
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for=" modelo_caracteristicas1" class="form-label">modelo caracteristicas</label>
                                <input type="text" class="form-control" name="txtmodelo_caracteristicasR" value="{{ $item->modelo_caracteristicas }}">
                            </div>
                            <div class="mb-3">
                                <label for="marca_otros1" class="form-label">marca otros</label>
                                <input type="text" class="form-control" name="txtmarca_otrosR" value="{{ $item->marca_otros }}">
                            </div>
                            <div class="mb-3">
                                <label for="critico1" class="form-label">critico</label>
                                <input type="text" class="form-control" name="txtcriticoR" value="{{ $item->critico }}">
                            </div>
                            <div class="mb-3">
                                <label for="moneda1" class="form-label">moneda</label>
                                <input type="text" class="form-control" name="txtmonedaR" value="{{ $item->moneda }}">
                            </div>
                            <div class="mb-3">
                                <label for="valor_compra1" class="form-label">valor_compra</label>
                                <input type="text" class="form-control" name="txtvalor_compraR" value="{{ $item->valor_compra }}">
                            </div>
                            <div class="mb-3">
                                <label for="recompra1" class="form-label">recompra</label>
                                <input type="text" class="form-control" name="txtrecompraR" value="{{ $item->recompra }}">
                            </div>
                            <div class="mb-3">
                                <label for="color1" class="form-label">color</label>
                                <input type="text" class="form-control" name="txtcolorR" value="{{ $item->color }}">
                            </div>
                            <div class="mb-3">
                                <label for="material1" class="form-label">material</label>
                                <input type="text" class="form-control" name="txtmaterialR" value="{{ $item->material }}">
                            </div>
                        </div>
                        <!-- Tercera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="dimensiones1" class="form-label">dimensiones</label>
                                <input type="text" class="form-control" name="txtdimensionesR" value="{{ $item->dimensiones }}">
                            </div>
                            <div class="mb-3">
                                <label for="condicion_bien1" class="form-label">condicion bien</label>
                                <input type="text" class="form-control" name="txtcondicion_bienR" value="{{ $item->condicion_bien }}">
                            </div>
                            <div class="mb-3">
                                <label for="habilitado1" class="form-label">habilitado</label>
                                <input type="text" class="form-control" name="txthabilitadoR" value="{{ $item->habilitado }}">
                            </div>
                            <div class="mb-3">
                                <label for="estado_bien" class="form-label">estado bien</label>
                                <input type="text" class="form-control" name="txtestado_bienR" value="{{ $item->estado_bien }}">
                            </div>
                            <div class="mb-3">
                                <label for="id_bodega1" class="form-label">id bodega</label>
                                <input type="text" class="form-control" name="txtid_bodegaR" value="{{ $item->id_bodega }}">
                            </div>
                            <div class="mb-3">
                                <label for="bodega1" class="form-label">bodega</label>
                                <input type="text" class="form-control" name="txtbodegaR" value="{{ $item->bodega }}">
                            </div>
                            <div class="mb-3">
                                <label for="id_ubicacion1" class="form-label">id ubicacion</label>
                                <input type="text" class="form-control" name="txtid_ubicacionR" value="{{ $item->id_ubicacion }}">
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion_bodega1" class="form-label">ubicacion bodega</label>
                                <input type="text" class="form-control" name="txtubicacion_bodegaR" value="{{ $item->ubicacion_bodega }}">
                            </div>
                        </div>
                        <!-- Cuarta columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nro_cedula_ruc1" class="form-label">nro cedula ruc</label>
                                <input type="text" class="form-control" name="txtnro_cedula_rucR" value="{{ $item->nro_cedula_ruc }}">
                            </div>
                            <div class="mb-3">
                                <label for="custodio_actual1" class="form-label">custodio actual</label>
                                <input type="text" class="form-control" name="txtcustodio_actualR" value="{{ $item->custodio_actual }}">
                            </div>
                            <div class="mb-3">
                                <label for="custodio_activo1" class="form-label">custodio activo</label>
                                <input type="text" class="form-control" name="txtcustodio_activoR" value="{{ $item->custodio_activo }}">
                            </div>
                            <div class="mb-3">
                                <label for="origen_ingreso1" class="form-label">origen ingreso</label>
                                <input type="text" class="form-control" name="txtorigen_ingresoR" value="{{ $item->origen_ingreso }}">
                            </div>
                            <div class="mb-3">
                                <label for="tipo_ingreso1" class="form-label">tipo ingreso</label>
                                <input type="text" class="form-control" name="txttipo_ingresoR" value="{{ $item->tipo_ingreso }}">
                            </div>
                            <div class="mb-3">
                                <label for="nro_compromiso1" class="form-label">nro compromiso</label>
                                <input type="text" class="form-control" name="txtnro_compromisoR" value="{{ $item->nro_compromiso }}">
                            </div>
                            <div class="mb-3">
                                <label for="estado_acta1" class="form-label">estado acta</label>
                                <input type="text" class="form-control" name="txtestado_actaR" value="{{ $item->estado_acta }}">
                            </div>
                            <div class="mb-3">
                                <label for="contabilizado_acta1" class="form-label">contabilizado acta</label>
                                <input type="text" class="form-control" name="txtcontabilizado_actaR" value="{{ $item->contabilizado_acta }}">
                            </div>
                        </div>
                        <!-- Quinta columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contabilizado_bien1" class="form-label">contabilizado bien</label>
                                <input type="text" class="form-control" name="txtcontabilizado_bienR" value="{{ $item->contabilizado_bien }}">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion1" class="form-label">descripcion</label>
                                <input type="text" class="form-control" name="txtdescripcionR" value="{{ $item->descripcion }}">
                            </div>
                            <div class="mb-3">
                                <label for="item_renglon1" class="form-label">item renglon</label>
                                <input type="text" class="form-control" name="txtitem_renglonR" value="{{ $item->item_renglon }}">
                            </div>
                            <div class="mb-3">
                                <label for="cuenta_contable1" class="form-label">cuenta contable</label>
                                <input type="text" class="form-control" name="txtcuenta_contableR" value="{{ $item->cuenta_contable }}">
                            </div>
                            <div class="mb-3">
                                <label for="depreciable1" class="form-label">depreciable</label>
                                <input type="text" class="form-control" name="txtdepreciableR" value="{{ $item->depreciable }}">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_creacion1" class="form-label">fecha creacion</label>
                                <input type="text" class="form-control" name="txtfecha_creacionR" value="{{ $item->fecha_creacion }}">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_ingreso1" class="form-label">fecha ingreso</label>
                                <input type="text" class="form-control" name="txtfecha_ingresoR" value="{{ $item->fecha_ingreso }}">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_ultima_depreciacion1" class="form-label">fecha ultima depreciacion</label>
                                <input type="text" class="form-control" name="txtfecha_ultima_depreciacionR" value="{{ $item->fecha_ultima_depreciacion }}">
                            </div>
                        </div>
                        <!-- Sexta columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="vida_util1" class="form-label">vida util</label>
                                <input type="text" class="form-control" name="txtvida_utilR" value="{{ $item->vida_util }}">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_termino_depreciacion1" class="form-label">fecha termino depreciacion</label>
                                <input type="text" class="form-control" name="txtfecha_termino_depreciacionR" value="{{ $item->fecha_termino_depreciacion }}">
                            </div>
                            <div class="mb-3">
                                <label for="valor_contable1" class="form-label">valor contable</label>
                                <input type="text" class="form-control" name="txtvalor_contableR" value="{{ $item->valor_contable }}">
                            </div>
                            <div class="mb-3">
                                <label for="valor_residual1" class="form-label">valor residual</label>
                                <input type="text" class="form-control" name="txtvalor_residualR" value="{{ $item->valor_residual }}">
                            </div>
                            <div class="mb-3">
                                <label for="valor_en_libros1" class="form-label">valor en libros</label>
                                <input type="text" class="form-control" name="txtvalor_en_librosR" value="{{ $item->valor_en_libros }}">
                            </div>
                            <div class="mb-3">
                                <label for="valor_depreciacion_acumulada1" class="form-label">valor depreciacion acumulada</label>
                                <input type="text" class="form-control" name="txtvalor_depreciacion_acumuladaR" value="{{ $item->valor_depreciacion_acumulada }}">
                            </div>
                            <div class="mb-3">
                                <label for="comodato1" class="form-label">comodato</label>
                                <input type="text" class="form-control" name="txtcomodatoR" value="{{ $item->comodato }}">
                            </div>
                        </div>
                    </div>
                    <!-- Botones de acción -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>