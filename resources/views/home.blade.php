<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Home</h1>
        <header>
            <nav>
                <a href="<?php echo route('home'); ?>">Inicio</a>
                <a href="<?php echo route('saludos', 'Sanders'); ?>">Saludos</a>
                <a href="<?php echo route('contactos'); ?>">Contacto</a>
            </nav>
        </header>
    </body>
</html>
