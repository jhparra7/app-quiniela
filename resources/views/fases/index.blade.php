@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
    <h1>Bienvenido a la pagina principal de Fases</h1>
    <br>
    <ul>
        @foreach ($fases as $fase)    
        {{ $fase->id }} - {{ $fase->name }}  <br>
        @endforeach
    </ul>
@endsection


