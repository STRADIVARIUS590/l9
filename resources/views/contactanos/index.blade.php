@extends('layouts.plantilla')

@section('title', 'Contactanos')


@section('content')

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif

    <h1>Form de contacto</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="">
            Nombre
            <br>
            <input type="text" name="name" id="">
        </label>
        <br>

        @error('name')
            <p>{{$message}}</p>   
        @enderror

        <label for="">
            Correo
            <br>
            <input type="text" name="correo" id="">
        </label>
        <br>

        @error('correo')
            <p>{{$message}}</p>   
        @enderror

        <label for="">
            <br>
            Mensaje
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>
        @error('mensaje')
            <p>{{$message}}</p>   
        @enderror

        <button type="submit">Enviar</button>
        
    </form>
@endsection