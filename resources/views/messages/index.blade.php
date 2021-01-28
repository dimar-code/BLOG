@extends('layout')

@section('contenido')
<h1>Todos los mensajes Recibidos</h1>
<table width="100%" border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>MENSAJE</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
        <tr>
        <td>{{ $message->id}}</td>    
        <td><a href="{{ route('mensajes.show', $message->id)}}">
        {{ $message->nombre}}
        </a></td>
        <td>{{ $message->email}}</td>
        <td>{{ $message->mensaje}}</td>
        <td>
        <a href="{{ route('mensajes.edit', $message->id)}}">Editar</a>
        <form style="display:inline " method="POST"  action="{{ route('mensajes.destroy', $message->id) }}">
            {!! csrf_field() !!}
            {!! method_field('DELETE')!!}
            <button type="submit">ELIMINAR</button>
        </form>
        </td>
        </tr>            
        @endforeach
    </tbody>
</table>
@stop