<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CURSOS SHOW</h1>
    <h1>Buenvenido al curso de <!?php echo $curso ?></h1>
</body>
</html>
 -->
@extends('layouts.plantilla')
    @section('title', 'Curso')
    @section('content')

    <h1>Bienvenido al curso de {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a> 
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Categoria: {{$curso->categoria}}</strong></p>

    <p>{{$curso->description}}</p>
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
{{-- @if ($categoria)
    <h1>de la categoria  {{$categoria}}</h1>
@else
    <h1>Sin categoria</h1>
@endif --}} 