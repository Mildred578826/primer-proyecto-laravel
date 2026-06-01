<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function procesar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:60',
            'edad' => 'required|numeric|min:1|max:120',
            'ocupacion' => 'required'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'edad.required' => 'La edad es obligatoria.',
            'edad.numeric' => 'La edad debe ser un número.',
            'ocupacion.required' => 'La ocupación es obligatoria.'
        ]);

        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
        $ocupacion = $request->input('ocupacion');

        if ($edad >= 18) {
            $mensaje = "Eres mayor de edad";
        } else {
            $mensaje = "Eres menor de edad";
        }

        return view('resultado', [
            'nombre' => $nombre,
            'edad' => $edad,
            'ocupacion' => $ocupacion,
            'mensaje' => $mensaje
        ]);
    }
}
