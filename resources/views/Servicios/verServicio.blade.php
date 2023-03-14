@extends('Templates/header')
@section('titulo',$nombrePagina='Editar Servicio')
@section('header')

<h1> {{$nombrePagina}}</h1>

<p>{{var_dump($servicio);}}</p>
@include('Templates/footer')
@endsection