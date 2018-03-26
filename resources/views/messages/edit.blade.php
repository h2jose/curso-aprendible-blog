@extends('layouts.app')

@section('contenido')
    <div class="container">
        <h1>Editar mensaje: {{ $message->id }}</h1>
        <hr>

        <form class="form-horizontal" action="{{ route('messages.update', $message->id) }}" method="POST">
            {{ csrf_field() }}
            {!! method_field('PUT') !!}
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="nombre" value="{{ $message->nombre }}" placeholder="John Doe">
                    {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Correo electrónico:</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email" value="{{ $message->email }}" placeholder="me@domain.com">
                    {!! $errors->first('email', '<span class="error">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Teléfono:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control"  name="phone" value="{{ $message->phone }}" placeholder="313 897 6458">
                    {!! $errors->first('phone', '<span class="error">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <label for="mensaje" class="col-sm-2 control-label">Mensaje:</label>
                <div class="col-sm-12">
                    <textarea name="mensaje" class="form-control" placeholder="quem quae dolore multos esse tamen noster labore esse quem">{{ $message->mensaje }}</textarea>
                    {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <a class="btn btn-light" href="{{ route('messages.index') }}">Volver</a>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
@endsection
