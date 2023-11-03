@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
    <h1>Bienvenido a la pagina principal de Estadios</h1>
    <br>
    <a href="{{route('estadios.create')}}" class="text-teal-600">Agregar un Estadio</a>
    <ul>
        @foreach ($estadios as $estadio) 
            <a href="{{ route('estadios.show',$estadio->id) }}">{{ $estadio->name }}</a>
            <br>
        @endforeach
    </ul>
@endsection


