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

            table {
                width: 80%;
                margin: 0 auto;
            }

            table tr+tr {
                background-color: #f4f4f4;
            }

            table tbody tr td > * {
                display: inline-block;
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
            <nav>
                <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a> |
                <a class="{{ activeMenu('messages') }}" href="{{ route('messages.index') }}">Mensajes</a>
            </nav>
        </header>
        <hr>

        @yield('contenido')

        <hr>
        <footer>Copyright &copy; {{ date('Y') }}</footer>
    </body>
</html>
