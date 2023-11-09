@extends('layouts.plantilla')

@section('titulo','Estadios')

@section('contenido')
    <h1>Estos son los estadios en los que se jugarán los partidos del mundial</h1>
    <br>
    <a href="{{route('estadios.create')}}" class="text-teal-600">Agregar un Estadio</a>
    <a href="{{route('home')}}" class="text-teal-600">Volver a Inicio</a>
    <ul>
        @foreach ($estadios as $estadio) 
            <a href="{{ route('estadios.show',$estadio->id) }}">{{ $estadio->name }}</a>
            
            <a href="{{ route('estadios.edit',$estadio) }}">Editar</a>
            <form action="{{route('estadios.destroy',$estadio)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">
                    Eliminar
                </button>
            </form>
            <br>
        @endforeach
    </ul>
@endsection


