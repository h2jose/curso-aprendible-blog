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
                            <a class="btn btn-primary" href="{{ route('messages.show', ['id' => $message->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="btn btn-secondary" href="{{ route('messages.edit', ['id' => $message->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <form class="form" action="{{ route('messages.destroy', ['id' => $message->id]) }}" method="post">
                                {{ csrf_field() }}
                                {!! method_field('DELETE') !!}

                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><a class="btn btn-success" href="{{ route('messages.create') }}">Nuevo mensaje</a></p>
    </div>
@endsection
