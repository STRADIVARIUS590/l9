<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CURSOS CREATE</h1>
</body>
</html> -->

 

@extends('layouts.plantilla')

@section('title', 'Crear curso')


@section('content')

    <h1>En esta pagina puedes crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf

        
        <label >Nombre
            <br>
            <input type="text" name="name" value="{{@old('name')}}">
        </label>
        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <label >
            <br>
            Descripcion
            <br>
            <textarea name="description" rows="5" >{{@old('description')}}</textarea>
            <br>
        </label>
        @error('description')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
       
        <label>Categoria
            <br>
            <input type="text" name="categoria" value="{{@old('categoria')}}">
            <br>
        </label>
       
        @error('categoria')
        <br>
        <small>{{$message}}</small>
        <br>
        @enderror
        <button type="submit">Enviar formulario </button>
    </form>
@endsection