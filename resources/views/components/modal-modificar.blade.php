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
                                                <label for="b" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtcodigo_bienR" value="{{ $item->codigo_bien }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="c" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtcodidgo_anteriorR" value="{{ $item->codigo_anterior }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="d" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtidentificadorR" value="{{ $item->identificador }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="f" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtnro_acta_matrizR" value="{{ $item->nro_acta_matriz }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="g" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtbld_bcaR" value="{{ $item->bld_bca }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="h" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtbienR" value="{{ $item->bien }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="i" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtserie_identificacionR" value="{{ $item->serie_identificacion }}">
                                            </div>
                                        </div>
                                        <!-- Segunda columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="j" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtmodelo_caracteristicasR" value="{{ $item->modelo_caracteristicas }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="k" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtmarca_otrosR" value="{{ $item->marca_otros }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="l" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtcriticoR" value="{{ $item->critico }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="m" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtmonedaR" value="{{ $item->moneda }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="n" class="form-label">IDdgfsdgsdgsd</label>
                                                <input type="text" class="form-control" name="txtvalor_compraR" value="{{ $item->valor_compra }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="o" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtrecompraR" value="{{ $item->recompra }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="p" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtcolorR" value="{{ $item->color }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="q" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtmaterialR" value="{{ $item->material }}">
                                            </div>
                                        </div>
                                        <!-- Tercera columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="r" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtdimensionesR" value="{{ $item->dimensiones }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="s" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtcondicion_bienR" value="{{ $item->condicion_bien }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="t" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txthabilitadoR" value="{{ $item->habilitado }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="u" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtestado_bienR" value="{{ $item->estado_bien }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="v" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtid_bodegaR" value="{{ $item->id_bodega }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="w" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtbodegaR" value="{{ $item->bodega }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="x" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtid_ubicacionR" value="{{ $item->id_ubicacion }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="y" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtubicacion_bodegaR" value="{{ $item->ubicacion_bodega }}">
                                            </div>
                                        </div>
                                        <!-- Cuarta columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="z" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtnro_cedula_rucR" value="{{ $item->nro_cedula_ruc }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="a1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtcustodio_actualR" value="{{ $item->custodio_actual }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="b1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtcustodio_activoR" value="{{ $item->custodio_activo }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="c1" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtorigen_ingresoR" value="{{ $item->origen_ingreso }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="d1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txttipo_ingresoR" value="{{ $item->tipo_ingreso }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="e1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtnro_compromisoR" value="{{ $item->nro_compromiso }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="f1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtestado_actaR" value="{{ $item->estado_acta }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="g1" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtcontabilizado_actaR" value="{{ $item->contabilizado_acta }}">
                                            </div>
                                        </div>
                                        <!-- Quinta columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="h1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtcontabilizado_bienR" value="{{ $item->contabilizado_bien }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="i1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtdescripcionR" value="{{ $item->descripcion }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="j1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtitem_renglonR" value="{{ $item->item_renglon }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="k1" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtcuenta_contableR" value="{{ $item->cuenta_contable }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="l1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtdepreciableR" value="{{ $item->depreciable }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="m1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtfecha_creacionR" value="{{ $item->fecha_creacion }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="n1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtfecha_ingresoR" value="{{ $item->fecha_ingreso }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="o1" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtfecha_ultima_depreciacionR" value="{{ $item->fecha_ultima_depreciacion }}">
                                            </div>
                                        </div>
                                        <!-- Sexta columna -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="p1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtvida_utilR" value="{{ $item->vida_util }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="q1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtfecha_termino_depreciacionR" value="{{ $item->fecha_termino_depreciacion }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="r1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtvalor_contableR" value="{{ $item->valor_contable }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="s1" class="form-label">Saldo
                                                    Anterior</label>
                                                <input type="text" class="form-control" name="txtvalor_residualR" value="{{ $item->valor_residual }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="t1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="txtvalor_en_librosR" value="{{ $item->valor_en_libros }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="u1" class="form-label">Codigo</label>
                                                <input type="text" class="form-control" name="txtvalor_depreciacion_acumuladaR" value="{{ $item->valor_depreciacion_acumulada }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="v1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtcomodatoR" value="{{ $item->comodato }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botones de acción -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>