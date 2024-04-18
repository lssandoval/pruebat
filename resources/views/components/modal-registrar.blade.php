<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar datos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('registrarBien') }}" method="POST">
                        @csrf
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="informacion-tab" data-bs-toggle="tab" data-bs-target="#informacion" type="button" role="tab" aria-controls="informacion" aria-selected="true">1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="detalle-tab" data-bs-toggle="tab" data-bs-target="#detalle" type="button" role="tab" aria-controls="detalle" aria-selected="false">2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tercera-tab" data-bs-toggle="tab" data-bs-target="#tercera" type="button" role="tab" aria-controls="tercera" aria-selected="false">3</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cuarta-tab" data-bs-toggle="tab" data-bs-target="#cuarta" type="button" role="tab" aria-controls="cuarta" aria-selected="false">4</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="quinta-tab" data-bs-toggle="tab" data-bs-target="#quinta" type="button" role="tab" aria-controls="quinta" aria-selected="false">5</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sexta-tab" data-bs-toggle="tab" data-bs-target="#sexta" type="button" role="tab" aria-controls="sexta" aria-selected="false">6</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="septima-tab" data-bs-toggle="tab" data-bs-target="#septima" type="button" role="tab" aria-controls="septima" aria-selected="false">7</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="octava-tab" data-bs-toggle="tab" data-bs-target="#octava" type="button" role="tab" aria-controls="octava" aria-selected="false">8</button>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Contenido de la primera pestaña -->
                            <div class="tab-pane fade show active" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                                <label for="inputCodigo1" class="form-label">Codigo</label>
                                <input type="text" class="form-control" name="txtcodigo_bienR">

                                <label for="inputCodigoAnterior1" class="form-label">Codigo Anterior</label>
                                <input type="text" class="form-control" name="txtcodigo_anteriorR">

                                <label for="inputIdentificador1" class="form-label">Identificador</label>
                                <input type="text" class="form-control" name="txtidentificadorR">

                                <label for="inputNroActaMatriz" class="form-label">NroActaMatriz</label>
                                <input type="text" class="form-control" name="txtnro_acta_matrizR">

                                <label for="inputBLDBCA1" class="form-label">BLD/BCA</label>
                                <input type="text" class="form-control" name="txtbld_bcaR">

                                <label for="inputBien1" class="form-label">Bien</label>
                                <input type="text" class="form-control" name="txtbienR">
                            </div>
                            <!-- Contenido de la segunda pestaña -->
                            <div class="tab-pane fade" id="detalle" role="tabpanel" aria-labelledby="detalle-tab">
                                <label for="inputSerieIdentificacion1" class="form-label">Serie/Identificacion</label>
                                <input type="text" class="form-control" name="txtserie_identificacionR">

                                <label for="inputModeloCaracteristicas1" class="form-label">Modelo/Caracteristicas</label>
                                <input type="text" class="form-control" name="txtmodelo_caracteristicasR">

                                <label for="inputMarcaOtros1" class="form-label">Marca/Otros</label>
                                <input type="text" class="form-control" name="txtmarca_otrosR">

                                <label for="inputCritico1" class="form-label">Critico</label>
                                <input type="text" class="form-control" name="txtcriticoR">

                                <label for="inputMoneda1" class="form-label">Moneda</label>
                                <input type="text" class="form-control" name="txtmonedaR">

                                <label for="inputValorCompra1" class="form-label">Valor de Compra</label>
                                <input type="text" class="form-control" name="txtvalor_compraR">
                            </div>
                            <!-- Contenido de la tercera pestaña -->
                            <div class="tab-pane fade" id="tercera" role="tabpanel" aria-labelledby="tercera-tab">
                                <label for="inputRecompra1" class="form-label">Recompra</label>
                                <input type="text" class="form-control" name="txtrecompraR">

                                <label for="inputColor1" class="form-label">Color</label>
                                <input type="text" class="form-control" name="txtcolorR">

                                <label for="inputMaterial1" class="form-label">Material</label>
                                <input type="text" class="form-control" name="txtmaterialR">

                                <label for="inputDimensiones1" class="form-label">Dimensiones</label>
                                <input type="text" class="form-control" name="txtdimensionesR">

                                <label for="inputCondicionBien1" class="form-label">Condicion del Bien</label>
                                <input type="text" class="form-control" name="txtcondicion_bienR">

                                <label for="inputHabilitado1" class="form-label">Habilitado</label>
                                <input type="text" class="form-control" name="txthabilitadoR">
                            </div>
                            <!-- Contenido de la cuarta pestaña -->
                            <div class="tab-pane fade" id="cuarta" role="tabpanel" aria-labelledby="cuarta-tab">
                                <label for="inputEstadoBien1" class="form-label">Estado Bien</label>
                                <input type="text" class="form-control" name="txtestado_bienR">

                                <label for="inputIdBodega1" class="form-label">Id Bodega</label>
                                <input type="text" class="form-control" name="txtid_bodegaR">

                                <label for="inputBodega1" class="form-label">Bodega</label>
                                <input type="text" class="form-control" name="txtbodegaR">

                                <label for="inputIdUbicacion1" class="form-label">Id Ubicacion</label>
                                <input type="text" class="form-control" name="txtid_ubicacionR">

                                <label for="inputUbicacionBodega1" class="form-label">Ubicacion Bodega</label>
                                <input type="text" class="form-control" name="txtubicacion_bodegaR">

                                <label for="inputNumeroCedulaRuc1" class="form-label">Numero Cedula/Ruc</label>
                                <input type="text" class="form-control" name="txtnro_cedula_rucR">
                            </div>
                            <!-- Contenido de la quinta pestaña -->
                            <div class="tab-pane fade" id="quinta" role="tabpanel" aria-labelledby="quinta-tab">
                                <label for="inputCustodioActual1" class="form-label">Custodio Actual</label>
                                <input type="text" class="form-control" name="txtcustodio_actualR">

                                <label for="inputCustodioActivo1" class="form-label">Custodio Activo</label>
                                <input type="text" class="form-control" name="txtcustodio_activoR">

                                <label for="inputOrigenIngreso1" class="form-label">Origen Ingreso</label>
                                <input type="text" class="form-control" name="txtorigen_ingresoR">

                                <label for="inputTipoIngreso1" class="form-label">Tipo Ingreso</label>
                                <input type="text" class="form-control" name="txttipo_ingresoR">

                                <label for="inputNroCompromiso1" class="form-label">Nro Compromiso</label>
                                <input type="text" class="form-control" name="txtnro_compromisoR">

                                <label for="inputEstadoActa1" class="form-label">Estado Acta</label>
                                <input type="text" class="form-control" name="txtestado_actaR">
                            </div>
                            <!-- Contenido de la sexta pestaña -->
                            <div class="tab-pane fade" id="sexta" role="tabpanel" aria-labelledby="sexta-tab">
                                <label for="inputContabilizadoActa1" class="form-label">Contabilizado Acta</label>
                                <input type="text" class="form-control" name="txtcontabilizado_actaR">

                                <label for="inputContabilizadoBien1" class="form-label">Contabilizado Bien</label>
                                <input type="text" class="form-control" name="txtcontabilizado_bienR">

                                <label for="inputDescripcion1" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="txtdescripcionR">

                                <label for="inputItemRenglon1" class="form-label">Item Renglon</label>
                                <input type="text" class="form-control" name="txtitem_renglonR">

                                <label for="inputCuentaContable1" class="form-label">Cuenta Contable</label>
                                <input type="text" class="form-control" name="txtcuenta_contableR">

                                <label for="inputDespreciable1" class="form-label">Despreciable</label>
                                <input type="text" class="form-control" name="txtdepreciableR">
                            </div>
                            <!-- Contenido de la septima pestaña -->
                            <div class="tab-pane fade" id="septima" role="tabpanel" aria-labelledby="septima-tab">
                                <label for="inputFechaCreacion1" class="form-label">Fecha Creacion</label>
                                <input type="text" class="form-control" name="txtfecha_creacionR">

                                <label for="inputFechaIngreso1" class="form-label">Fecha Ingreso</label>
                                <input type="text" class="form-control" name="txtfecha_ingresoR">

                                <label for="inputFechaUltimaDepreciacion1" class="form-label">Fecha Ultima Depreciacion</label>
                                <input type="text" class="form-control" name="txtfecha_ultima_depreciacionR">

                                <label for="inputVidaUtil1" class="form-label">Vida Util</label>
                                <input type="text" class="form-control" name="txtvida_utilR">

                                <label for="inputFechaTerminoDepreciacion1" class="form-label">Fecha Termino Depreciacion</label>
                                <input type="text" class="form-control" name="txtfecha_termino_depreciacionR">

                                <label for="inputValorContable1" class="form-label">Valor Contable</label>
                                <input type="text" class="form-control" name="txtvalor_contableR">
                            </div>
                            <!-- Contenido de la octava pestaña -->
                            <div class="tab-pane fade" id="octava" role="tabpanel" aria-labelledby="octava-tab">
                                <label for="inputValorResidual1" class="form-label">Valor Residual</label>
                                <input type="text" class="form-control" name="txtvalor_residualR">

                                <label for="inputValorEnLibros1" class="form-label">Valor En Libros</label>
                                <input type="text" class="form-control" name="txtvalor_en_librosR">

                                <label for="inputValorDepreciacionAcumulada1" class="form-label">Valor Depreciacion Acumulada</label>
                                <input type="text" class="form-control" name="txtvalor_depreciacion_acumuladaR">

                                <label for="inputComodato1" class="form-label">Como dato</label>
                                <input type="text" class="form-control" name="txtcomodatoR">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>