@extends('layouts.layout')

@section('contenido')
    <h1>Editar mensaje: {{ $message->id }}</h1>

    <form class="" action="{{ route('messages.update', $message->id) }}" method="POST">
        {{ csrf_field() }}
        {!! method_field('PUT') !!}
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $message->nombre }}" placeholder="John Doe">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
        </p>
        <p>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" value="{{ $message->email }}" placeholder="me@domain.com">
            {!! $errors->first('email', '<span class="error">:message</span>') !!}
        </p>
        <p>
            <label for="phone">Teléfono:</label>
            <input type="text" name="phone" value="{{ $message->phone }}" placeholder="313 897 6458">
            {!! $errors->first('phone', '<span class="error">:message</span>') !!}
        </p>
        <p>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" placeholder="quem quae dolore multos esse tamen noster labore esse quem">{{ $message->mensaje }}</textarea>
            {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
        </p>
        <input type="submit" value="Enviar">
        <a href="{{ route('messages.index') }}">Volver</a>
    </form>
@endsection
