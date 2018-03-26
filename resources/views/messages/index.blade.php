@extends('layouts.app')

@section('contenido')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="well">
            <h1>Mensajes</h1>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->nombre }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('messages.show', ['id' => $message->id]) }}">Ver</a>
                            <a class="btn btn-warning" href="{{ route('messages.edit', ['id' => $message->id]) }}">Editar</a>
                            <form class="form" action="{{ route('messages.destroy', ['id' => $message->id]) }}" method="post">
                                {{ csrf_field() }}
                                {!! method_field('DELETE') !!}

                                <button class="btn btn-primary" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><a class="btn btn-primary" href="{{ route('messages.create') }}">Nuevo mensaje</a></p>
    </div>
@endsection
