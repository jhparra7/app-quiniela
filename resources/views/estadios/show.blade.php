@extends('layouts.plantilla')

@section('titulo','Perfil')

@section('contenido')
    <h1>Sobre el estadio {{ $estadio->name }}</h1>
    {{-- Colocar aca una imagen del estadio --}}
    <p>{{ $estadio->descripcion }}</p>
    {{-- Colocar aca informacion relevante al estadio --}}
    <a href="{{ route('estadios.index') }}">Volver a Estadios</a>

@endsection