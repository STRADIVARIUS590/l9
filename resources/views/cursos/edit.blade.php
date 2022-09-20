 


@extends('layouts.plantilla')

@section('title', 'Editar curso')


@section('content')

    <h1>En esta pagina puedes editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @method('PUT') 
        @csrf

        
        <label >Nombre
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
            @error('name')
                <small><br>{{$message}}<br></small>
            @enderror
        </label>
        <label >
            <br>
            Descripcion
            <br>
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        @error('description')
            <small><br>{{$message}}<br></small>
        @enderror
        </label>
            <br>
            <label>Categoria
                <br>
                <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
                @error('categoria')
                <small><br>{{$message}}<br></small>
            @enderror
            </label>

            <button type="submit">Actualizar formulario</button>
    </form>
@endsection