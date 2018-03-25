<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contactos');
    }

    public function saludo($nombre = 'Invitado')
    {
        $html = "<h2>Contenido HTML</h2>";
        $script = "<script>alert('Hola Mundo')</script>";

        $consolas = [
            'Play Station 4',
            'Xbox One',
            'Wii U'
        ];

        return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }

    public function mensajes(Request $request)
    {
        // dd($request->has('nombre'));
        if ($request->filled('nombre')) {
            return "Tiene nombre";
        }

        return "No tiene nombre";
    }
}
