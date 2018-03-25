<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <style media="screen">
            .active {
                text-decoration: none;
                color: green;
            }

            .error {
                color: red;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <header>
            @php
                function activeMenu($url)
                {
                    return request()->is($url) ? 'active' : '';
                }
            @endphp
            {{-- <h1>{{ request()->is('/') ? 'Estas en el home' : 'No estás en el home' }}</h1> --}}
            <nav>
                <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
                <a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'Sanders') }}">Saludos</a>
                <a class="{{ activeMenu('contactame') }}" href="{{ route('contactos') }}">Contactos</a>
            </nav>
        </header>
        <hr>

        @yield('contenido')

        <hr>
        <footer>Copyright &copy; {{ date('Y') }}</footer>
    </body>
</html>
