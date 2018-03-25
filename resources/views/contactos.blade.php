@extends('layouts.layout')

@section('contenido')
    <h1>Sección de Contactos</h1>
    <form class="" action="contacto" method="post">
        {{ csrf_field() }}
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="John Doe">
        </p>
        <p>
            <label for="email">Correo electrónico:</label>
            <input type="text" name="email" placeholder="me@domain.com">
        </p>
        <p>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" placeholder="quem quae dolore multos esse tamen noster labore esse quem"></textarea>
        </p>
        <input type="submit" value="Enviar">
    </form>
@endsection
