@extends('layouts.app')

@section('contenido')

<div class="panel-header">
    <h2>Crear mini perfil</h2>
    <p>Captura los datos del usuario para generar una vista de perfil personalizada.</p>
</div>

<div class="panel-body">

    @if ($errors->any())
        <div class="errores">
            <strong>Revisa los datos del formulario:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/procesar">
        @csrf

        <div class="grid-form">
            <div class="campo-completo">
                <label>Nombre completo:</label>
                <input 
                    type="text" 
                    name="nombre" 
                    placeholder="Ejemplo: Mildred Sofia Espinoza"
                    value="{{ old('nombre') }}"
                >
            </div>

            <div>
                <label>Edad:</label>
                <input 
                    type="number" 
                    name="edad" 
                    placeholder="Ejemplo: 20"
                    value="{{ old('edad') }}"
                >
            </div>

            <div>
                <label>Ocupación:</label>
                <select name="ocupacion">
                    <option value="">Selecciona una opción</option>
                    <option value="Estudiante" {{ old('ocupacion') == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                    <option value="Profesionista" {{ old('ocupacion') == 'Profesionista' ? 'selected' : '' }}>Profesionista</option>
                    <option value="Otro" {{ old('ocupacion') == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
        </div>

        <button type="submit">Generar perfil</button>
    </form>

</div>

@endsection