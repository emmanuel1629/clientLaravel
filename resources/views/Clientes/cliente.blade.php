@extends('Templates/header')

@section('titulo',$nombrePagina='Pàgina Agregar Nuevo Cliente')

@section('header')
    <h1>{{$nombrePagina}}</h1>

<form action="{{route('cliente.store')}}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="name">
    <br>
    <input type="text" name="phone" id="phone" placeholder="phone">
    <br>
    <input type="text" name="addres" id="addres" placeholder="addres">
    <br>
    <input type="text" name="email" id="email" placeholder="email">
    <br>
    <button type="submit">Guardar</button>
</form>
@include('Templates/footer')
@endsection