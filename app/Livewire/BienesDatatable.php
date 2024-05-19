<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Nuevat;

class BienesDatatable extends DataTableComponent
{
    protected $model = Nuevat::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Codigo bien", "codigo_bien")
                ->sortable(),
            Column::make("Codigo anterior", "codigo_anterior")
                ->sortable(),
            Column::make("Identificador", "identificador")
                ->sortable(),
            Column::make("Nro acta matriz", "nro_acta_matriz")
                ->sortable(),
            Column::make("Bld bca", "bld_bca")
                ->sortable(),
            Column::make("Bien", "bien")
                ->sortable(),
            Column::make("Serie identificacion", "serie_identificacion")
                ->sortable(),
            Column::make("Modelo caracteristicas", "modelo_caracteristicas")
                ->sortable(),
            Column::make("Marca otros", "marca_otros")
                ->sortable(),
            Column::make("Critico", "critico")
                ->sortable(),
            Column::make("Moneda", "moneda")
                ->sortable(),
            Column::make("Valor compra", "valor_compra")
                ->sortable(),
            Column::make("Recompra", "recompra")
                ->sortable(),
            Column::make("Color", "color")
                ->sortable(),
            Column::make("Material", "material")
                ->sortable(),
            Column::make("Dimensiones", "dimensiones")
                ->sortable(),
            Column::make("Condicion bien", "condicion_bien")
                ->sortable(),
            Column::make("Habilitado", "habilitado")
                ->sortable(),
            Column::make("Estado bien", "estado_bien")
                ->sortable(),
            Column::make("Id bodega", "id_bodega")
                ->sortable(),
            Column::make("Bodega", "bodega")
                ->sortable(),
            Column::make("Id ubicacion", "id_ubicacion")
                ->sortable(),
            Column::make("Ubicacion bodega", "ubicacion_bodega")
                ->sortable(),
            Column::make("Nro cedula ruc", "nro_cedula_ruc")
                ->sortable(),
            Column::make("Custodio actual", "custodio_actual")
                ->sortable(),
            Column::make("Custodio activo", "custodio_activo")
                ->sortable(),
            Column::make("Origen ingreso", "origen_ingreso")
                ->sortable(),
            Column::make("Tipo ingreso", "tipo_ingreso")
                ->sortable(),
            Column::make("Nro compromiso", "nro_compromiso")
                ->sortable(),
            Column::make("Estado acta", "estado_acta")
                ->sortable(),
            Column::make("Contabilizado acta", "contabilizado_acta")
                ->sortable(),
            Column::make("Contabilizado bien", "contabilizado_bien")
                ->sortable(),
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make("Item renglon", "item_renglon")
                ->sortable(),
            Column::make("Cuenta contable", "cuenta_contable")
                ->sortable(),
            Column::make("Depreciable", "depreciable")
                ->sortable(),
            Column::make("Fecha creacion", "fecha_creacion")
                ->sortable(),
            Column::make("Fecha ingreso", "fecha_ingreso")
                ->sortable(),
            Column::make("Fecha ultima depreciacion", "fecha_ultima_depreciacion")
                ->sortable(),
            Column::make("Vida util", "vida_util")
                ->sortable(),
            Column::make("Fecha termino depreciacion", "fecha_termino_depreciacion")
                ->sortable(),
            Column::make("Valor contable", "valor_contable")
                ->sortable(),
            Column::make("Valor residual", "valor_residual")
                ->sortable(),
            Column::make("Valor en libros", "valor_en_libros")
                ->sortable(),
            Column::make("Valor depreciacion acumulada", "valor_depreciacion_acumulada")
                ->sortable(),
            Column::make("Comodato", "comodato")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
