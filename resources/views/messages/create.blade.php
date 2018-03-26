@extends('layouts.app')

@section('contenido')
    <div class="container">
        <h1>Nuevo mensaje</h1>
        @if (Session()->has('info'))
            <h3>{{ session('info') }}</h3>
        @else
            <form class="" action="{{ route('messages.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="John Doe">
                        {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Correo electrónico:</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="me@domain.com">
                        {!! $errors->first('email', '<span class="error">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Teléfono:</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control"  name="phone" value="{{ old('phone') }}" placeholder="313 897 6458">
                        {!! $errors->first('phone', '<span class="error">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensaje" class="col-sm-2 control-label">Mensaje:</label>
                    <div class="col-sm-12">
                        <textarea name="mensaje" class="form-control" placeholder="quem quae dolore multos esse tamen noster labore esse quem">{{ old('mensaje') }}</textarea>
                        {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 text-right">
                        <a class="btn btn-default" href="{{ route('messages.index') }}">Cancelar</a>
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection
