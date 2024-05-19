<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\CrudController;
use App\Http\Controllers\VadminController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\MantenimientoController;

use App\Http\Controllers\QRCodeController;

use App\Http\Controllers\LoginController;
use App\Livewire\CrudPage;
use App\Livewire\TableComponent;
use App\Livewire\WelcomePage;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', CrudPage::class)->name('dashboard');
    Route::get('/tabla', TableComponent::class)->name('tabla');

    Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');
    Route::post('/registrarBien', [CrudController::class, 'create']);
    Route::post('/modificarBien/{id}', [CrudController::class, 'update']);
    Route::delete('/eliminarBien/{id}', [CrudController::class, 'delete']);

    Route::post('/subir-archivo', [ArchivoController::class, 'subirArchivo'])->name('subirArchivo');
    Route::get('/vadmin', [VadminController::class, 'index_vadmin'])->name('vadmin.index');
    Route::post('/upload-excel', [ExcelController::class, 'upload'])->name('upload.excel');

    Route::get('/buscar-en-base', [BusquedaController::class, 'buscar'])->name('buscar.en.base');
    Route::post('/registrar-mantenimiento', [MantenimientoController::class, 'agregarMantenimiento'])->name('mantenimiento.store');
    Route::get('/mostrarMantenimientos/{id}/mostrar', [MantenimientoController::class, 'mostrarMantenimientos'])->name('mostrarMantenimientos.mostrar');

    Route::post('/generate-qrcode', [QRCodeController::class, 'generateQR'])->name('generate-qrcode');
});

Route::get('/vadmin-page', function () {
    return view('vadmin');
})->name('vadmin.page');