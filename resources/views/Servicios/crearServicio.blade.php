@extends('Templates/header')
@section('titulo',$nombrePagina='Pàgina Agregar Servicio')
@section('header')

    <h1>{{$nombrePagina}}</h1>

<form action="{{route('services.store')}}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="name">
    <br>
    <input type="text" name="price" id="price" placeholder="price">
    <br>
    <input type="text" name="description" id="description" placeholder="description">
    <br>
   
    <button type="submit">Guardar</button>
</form>

@include('Templates/footer')
@endsection