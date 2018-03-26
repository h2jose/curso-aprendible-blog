@extends('layouts.layout')

@section('contenido')
    <h1>Sección de Mensajes</h1>
    <hr>

    <table>
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
                        <a href="{{ route('messages.show', ['id' => $message->id]) }}">Ver</a> |
                        <a href="{{ route('messages.edit', ['id' => $message->id]) }}">Editar</a> |
                        <form class="" action="{{ route('messages.destroy', ['id' => $message->id]) }}" method="post">
                            {{ csrf_field() }}
                            {!! method_field('DELETE') !!}

                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p><a href="{{ route('messages.create') }}">Nuevo mensaje</a></p>
@endsection
