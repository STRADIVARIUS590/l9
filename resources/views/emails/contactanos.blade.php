<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico</h1>
    <p>Este es el primer correo electronico por laravel</p>

    <strong>Nombre&nbsp;{{$contacto['name']}}</strong>
    <p>Correo &nbsp;{{$contacto['correo']}}</p>
    <p>Mensaje &nbsp; {{$contacto['mensaje']}}</p>
</body>
</html>