<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    public function home()
    {
        // return ['key' => ['value1', 'value2']];
        // return response('Contenido de la respuesta', 200)->header('X-TOKEN', bcrypt('secret'));
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

    public function mensajes(CreateMessageRequest $request)
    {
        $data = $request->all();

        return redirect()
            ->route('contactos')
            ->with('info', 'Tu mensaje ha sido enviado');
    }
}
