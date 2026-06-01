@extends('layouts.app')

@section('contenido')

<div class="panel-header">
    <h2>Perfil generado</h2>
    <p>Estos son los datos procesados desde el controlador de Laravel.</p>
</div>

<div class="panel-body">

    <div class="perfil-card">
        <div class="perfil-left">
            <div class="avatar">
                {{ strtoupper(substr($nombre, 0, 1)) }}
            </div>
            <h3>{{ $nombre }}</h3>
            <p>{{ $ocupacion }}</p>
        </div>

        <div class="perfil-right">
            <div class="dato">
                <span>Nombre</span>
                <strong>{{ $nombre }}</strong>
            </div>

            <div class="dato">
                <span>Edad</span>
                <strong>{{ $edad }} años</strong>
            </div>

            <div class="dato">
                <span>Ocupación</span>
                <strong>{{ $ocupacion }}</strong>
            </div>

            <div class="mensaje">
                {{ $mensaje }}
            </div>

            <a class="boton" href="/">Crear otro perfil</a>
        </div>
    </div>

</div>

@endsection