@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
    <h1>Bienvenido a la pagina principal de Equipos</h1>
    <br>
    <ul>
        @foreach ($equipos as $equipo)    
            {{ $equipo->name }} - {{$equipo->id_grupo }} <br>
        @endforeach
    </ul>
@endsection


