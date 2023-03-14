@extends('Templates/header')

@section('titulo',$nombrePagina='Pàgina de Clientes')

@section('header')
    <h1>{{$nombrePagina}}</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>addres</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $cliente)
                <tr>
                    <td> {{$cliente['name']}} </td>
                    <td> {{$cliente['addres']}} </td>
                    <td> {{$cliente['phone']}} </td>
                    <td> {{$cliente['addres']}} </td>
                    <td>
                        <a href="{{route('cliente.delete',$cliente['id'])}}">eliminar</a>
                        <a href="{{route('cliente.view',$cliente['id'])}}">ver</a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@include('Templates/footer')
@endsection

