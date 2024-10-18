<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
ARTICULOS
{{--ARTICULOS--}}
{{--@dd($articulos)--}}
{{--@dump($articulos)--}}
<div class="m-4 p-8 rounded shadow border-fuchsia-600 bg-amber-200">
    @foreach($articulos as $articulo)
        <p>{{$articulo->ref}} - {{$articulo->descripcion}}</p>
    @endforeach
</div>
<ul>
    @foreach($articulos as $articulo)
    <li>{{$articulo->ref}} - {{$articulo->descripcion}}</li>
    @endforeach
</ul>
</body>
</html>
