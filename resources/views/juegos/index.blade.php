@extends('layouts.plantilla')

@section('titulo','Horarios')

@push('styles_tabla')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tabla.css') }}">
@endpush

@section('contenido')
<div class="container">
    <h2>Horario de Juegos</h2>
    <table>
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
          <th scope="col">Equipo</th>
          <th scope="col">Equipo</th>
          <th scope="col">Estadio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01-01-2024</td>
          <td>18:00</td>
          <td>Venezuela</td>
          <td>Colombia</td>
          <td>Barquisimeto</td>
        </tr>
        <tr>
          <td>02-01-2024</td>
          <td>16:00</td>
          <td>Brazil</td>
          <td>Argentina</td>
          <td>Barquisimeto</td>
        </tr>
        <tr>
          <td>03-01-2024</td>
          <td>18:00</td>
          <td>Uruguay</td>
          <td>Chile</td>
          <td>Caracas</td>          
        </tr>
        <tr>
          
        </tr>
        <tr>
          
        </tr>
      </tbody>
    </table>

    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-3"></div>
        <div class="col col-2"></div>
        <div class="col col-4"></div>
        <div class="col col-4"></div>
        <div class="col col-2"></div>
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


