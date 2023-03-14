@extends('Templates/header')
@section('titulo',$nombrePagina='Pàgina de Servicios')
@section('header')
    <h1> {{$nombrePagina}} </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>eliminar</th>
                <th>editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $servicio)
                <tr>
                    <td> {{$servicio['id']}} </td>
                    <td> {{$servicio['name']}} </td>
                    <td> {{$servicio['description']}} </td>
                    <td> {{$servicio['price']}} </td>
                    <td>
                        <a href="{{route('services.delete',$servicio['id'])}}">eliminar</a>  
                    </td>

                    <td>
                        <a href="{{route('services.view',$servicio['id'])}}">ver</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@include('Templates/footer')
@endsection