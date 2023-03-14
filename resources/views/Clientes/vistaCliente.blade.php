@extends('Templates/header')

@section('titulo',$nombrePagina='Editar Cliente')

@section('header')
    <h1>{{$nombrePagina}}</h1>


<form action="{{route('cliente.update')}}" method="POST">
    @csrf
    <input type="text" name="cliente_id" id="cliente_id"  value="{{$cliente['cliente']['id']}}">
   <br>
    <input type="text" name="name" id="name" placeholder="name"  value="{{$cliente['cliente']['name']}}">
    <br>
    <input type="text" name="phone" id="phone" placeholder="phone" value="{{$cliente['cliente']['phone']}}">
    <br>
    <input type="text" name="addres" id="addres" placeholder="addres" value="{{$cliente['cliente']['addres']}}">
    <br>
    <input type="text" name="email" id="email" placeholder="email" value="{{$cliente['cliente']['email']}}">
    <br>
    <button type="submit">Guardar</button>
</form>
@include('Templates/footer')
@endsection