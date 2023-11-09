@extends('layouts.plantilla')

@section('titulo','Home')

@section('contenido')
    <h1>Bienvenido a la Quiniela</h1>
    <a href="">Ir a Grupos</a> <br>
    <a href="">Ir a Equipos</a> <br>
    <a href="{{ route('estadios.index') }}">Ir a Estadios</a> <br>
    <a href="">Ir a Fases</a> <br>
    <a href="">Ir a Juegos</a> <br>
    <a href="">Ir a Horarios</a> <br> 
@endsection