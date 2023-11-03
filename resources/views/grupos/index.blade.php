@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
    <h1>Bienvenido a la pagina principal de Grupos</h1>
    <br>
    <ul>
        @foreach ($grupos as $grupo)    
        {{ $grupo->id }} - {{ $grupo->name }}  <br>
        @endforeach
    </ul>
@endsection


