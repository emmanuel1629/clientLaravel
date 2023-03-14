<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
        <header>  
            <nav>
                <a href="{{url('/')}}">Ir A La Pagina Principal</a> <br>
                <a href="{{url('/cliente')}}">Agregar Cliente</a> <br>
                <a href="{{url('servicios/crearServicio')}}">Agregar Servicio</a><br>           
                <a href="{{url('/clientes')}}">Clientes<a><br>
                <a href="{{url('/servicios')}}">Servicios<a>
            </nav>
        </header>
    @yield('header')
</body>
</html>