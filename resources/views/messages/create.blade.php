@extends('layout')

@section('contenido')
<h1>CONTACTANOS</h1>
<h2>escribenos</h2>
@if( session()->has('info') )
<h3>{{ session('info') }}</h3>
@else
<form method="POST" action={{ route('mensajes.store')}}>
{!! csrf_field() !!}
    <p><label for="nombre">
        Nombre
    <input type="text" name="nombre" value="{{old('nombre')}}">
        {{ $errors->first('nombre') }}
    </label></p>
    <p><label for="email">
        email
        <input type="text" name="email" value="{{old('email')}}">
        {{ $errors->first('email') }}
    </label></p>
    <div class="form-group">
        <label for=""> Mensaje</label>
        <textarea name="mensaje" id="mensaje" cols="50" rows="5"></textarea>
    </div>
   
    <input type="submit" value="ENVIAR"></p>
</form>
@endif
@stop