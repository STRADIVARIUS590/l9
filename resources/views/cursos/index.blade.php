<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CURSOS INDEX</h1>
</body>
</html>
 -->


 
@extends('layouts.plantilla')

@section('title', 'Todos los cursos')


@section('content')
    <h1>Cursos disponibles: </h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach($cursos as $curso) 
            <li>
                {{-- Pasar parametros a una ruta con nombre --}}
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                {{-- {{$curso->name}} --}}
                <br>
                {{-- {{route('cursos.show', $curso)}} --}}
            </li>
            @endforeach
        </ul>
        {{$cursos->links()}}
@endsection

