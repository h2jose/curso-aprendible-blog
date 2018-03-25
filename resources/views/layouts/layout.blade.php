<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="<?php echo route('home'); ?>">Inicio</a>
                <a href="<?php echo route('saludos', 'Sanders'); ?>">Saludos</a>
                <a href="<?php echo route('contactos'); ?>">Contactos</a>
            </nav>
        </header>
        @yield('contenido')
        <footer>Copyright &copy; {{ date('Y') }}</footer>
    </body>
</html>
