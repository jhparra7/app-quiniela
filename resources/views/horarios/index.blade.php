@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
    <h1>Bienvenido a la pagina principal de Horarios</h1>
    <br>
    <ul>
        @foreach ($horarios as $horario)    
            {{ $horario->horario }} <br>
        @endforeach
    </ul>
@endsection


