@extends('layouts.layout')

@section('contenido')
    <h1>Mensaje</h1>
    <p>Enviado por: {{ $message->nombre }} - {{ $message->email }} - Teléfono: {{ $message->phone }}</p>
    <p>{{ $message->mensaje }}</p>
    <a href="{{ route('messages.index') }}">Volver</a>
@endsection
