<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi sitio web</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div id="app">
        @yield('content')
    </div>

    <footer>
        Todos los derechos reservados &copy; {{ date('Y') }}
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>