<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="font-sans antialiased">

    {{ __("pagination.next") }}
    <br>
    {!! __("pagination.next") !!}
    <br>
    {{ __("Administración de Clientes") }}
    <br>
    {{ __("Administración de Empleados") }}
    </body>
</html>
