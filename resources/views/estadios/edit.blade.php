@extends('layouts.plantilla')

@section('titulo','Crear')

@section('contenido')
    <h1>En esta pagina podras editar un Estadio</h1>
    <form action="{{ route('estadios.update', $estadio) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre :
            <br>
            <input type="text" name="name" value={{ old('name',$estadio->name) }}>
        </label>
        @error('name')
            <br>
            <span>*El campo name es obligatorio</span>
            <br>
        @enderror
        <label>
            <br>
            Descripción :
            <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion',$estadio->descripcion) }}</textarea>
        </label>
        @error('descripcion')
            <br>
            <span>*El campo descripcion es obligatorio</span>
            <br>
         @enderror
        <br>
        <p> Agregar un metodo para subir una imagen <b>Aqui</b></p>
        <button type="submit">
            Actualizar Estadio
        </button>
    </form>
@endsection