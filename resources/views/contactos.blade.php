@extends('layouts.layout')

@section('contenido')
    <h1>Sección de Contactos</h1>
    <form class="" action="contacto" method="post">
        {{ csrf_field() }}
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="John Doe">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
        </p>
        <p>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="me@domain.com">
            {!! $errors->first('email', '<span class="error">:message</span>') !!}
        </p>
        <p>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" placeholder="quem quae dolore multos esse tamen noster labore esse quem">{{ old('mensaje') }}</textarea>
            {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
        </p>
        <input type="submit" value="Enviar">
    </form>
@endsection
