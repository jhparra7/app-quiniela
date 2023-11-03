@extends('layouts.plantilla')

@section('titulo','Horarios')

@push('styles_tabla')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tabla.css') }}">
@endpush

@section('contenido')
<div class="container">
    <h2>Horario de Juegos</h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-3">Fecha</div>
        <div class="col col-2">Hora</div>
        <div class="col col-4">Equipo</div>
        <div class="col col-4">Equipo</div>
        <div class="col col-2">Estadio</div>
      </li>
      @foreach ($juegos as $juego)    
      <li class="table-row">
        <div class="col col-3" data-label="Job Id">{{ $juego->fecha }}</div>
        <div class="col col-2" data-label="Customer Name">{{$juego->id_horario }}</div>
        <div class="col col-4" data-label="Amount">{{$juego->id_equipo1 }}</div>
        <div class="col col-4" data-label="Payment Status">{{$juego->id_equipo2 }}</div>
        <div class="col col-2" data-label="Payment Status">{{$juego->id_estadio }}</div>
      </li>
      @endforeach
    </ul>
  </div>
@endsection


