@extends('layouts.plantilla')

@section('titulo','Perfil')

@section('contenido')
    <h1>Sobre el estadio {{ $estadio->name }}</h1>
    {{-- Colocar aca una imagen del estadio --}}
    <img src="https://placehold.co/600x400" alt="Estadio">
    <p>{{ $estadio->descripcion }}</p>
    {{-- Colocar aca informacion relevante al estadio --}}
    <a href="{{ route('estadios.index') }}">Volver a Estadios</a>

@endsection