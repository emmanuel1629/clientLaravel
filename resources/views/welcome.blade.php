<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body >
            <h1>Feed Page<h1>
            <!-- Nav tabs -->
            <a href="{{url('/clientes')}}">Clientes<a>
            <br>
            <a href="{{url('/servicios')}}">Servicios<a>
    </body>
</html>
