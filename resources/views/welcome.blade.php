@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
@php
    $backgroundImage = asset('asset/fondo.jpg');
@endphp
<div class="container-fluid">
    <div class="row" style="height: 100vh;">
        <div class="col-md-6 p-0" style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center;">        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="background-color: #f5f5f5;">
            <div class="text-center">
                <h2 style="font-size: 2.5rem; color: #333;">BIENVENIDO AL ADMINISTRADOR DE BIENES COSEDE</h2>
                <p style="font-size: 1.2rem; color: #555;">¡Gestiona tus bienes de manera fácil y eficiente!</p>
            </div>
        </div>
    </div>
</div>
@endsection