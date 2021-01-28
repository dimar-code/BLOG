@extends('layout')

@section('contenido')

    <h1>Editar Mensaje</h1>
    
    <form method="POST" action={{ route('mensajes.update', $message->id)}}>
        {!! @method_field(PUT)!!}
        {!! csrf_field() !!}
            <p><label for="nombre">
                Nombre
            <input type="text" name="nombre" value="{{ $message->nombre }}">
                {{ $errors->first('nombre') }}
            </label></p>
            <p><label for="email">
                email
                <input type="text" name="email" value="{{ $message->email }}">
                {{ $errors->first('email') }}
            </label></p>
            <p><label for="mensajes">
                mensaje
            <textarea name="mensajes">{{$message->mensaje}}</textarea>
                {{ $errors->first('mensajes') }}
            </label></p>
            <input type="submit" value="ENVIAR"></p>
        </form>
@endsection