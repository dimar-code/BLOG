@extends('layout')

@section('contenido')

<h1>MENSAJE</h1>
<p>Enviado por {{ $message->nombre }} - {{ $message->email}} </p>
<p>{{ $message->mensaje }}</p>
    
@endsection