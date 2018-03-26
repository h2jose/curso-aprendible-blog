@extends('layouts.app')

@section('contenido')
    <div class="container">
        <h1>Mensaje</h1>
        <hr>

        <p>Enviado por: {{ $message->nombre }} - {{ $message->email }} - Teléfono: {{ $message->phone }}</p>
        <p>{{ $message->mensaje }}</p>
        <a class="btn btn-warning" href="{{ route('messages.edit', $message->id) }}">Editar</a>
        <a class="btn btn-default" href="{{ route('messages.index') }}">Volver</a>
    </div>
@endsection
