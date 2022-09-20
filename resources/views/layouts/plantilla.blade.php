<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <style>
        .active{
            color: red;
            font-weight: bold;
            display: inline;
        }
    </style>
    <title>@yield('title') </title>
</head>
<body>
    <h1>Coders Free</h1>
        @include('layouts.partials.header')
{{--     <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active':''}}">Home</a>
            </li>
            <li>
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*')? 'active':''}}" >Cursos</a>
                {{-- <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index')? 'active':''}}" >Cursos</a> --}}
                {{-- @dump(request()->routeIs('cursos.index'))} --}}
{{--             </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')? 'active':''}}" >Nosotros</a>
                {{-- @dump(request()->routeIs('nosotros')) --}}
{{--             </li>
        </ul>
    </nav>  --}}
    @yield('content')
    @include('layouts.partials.footer')
</body>
</html>
