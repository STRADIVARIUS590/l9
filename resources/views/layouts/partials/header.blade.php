<nav>
    <ul>
        <li>
            <a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active':''}}">Home</a>
        </li>
        <li>
            <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*')? 'active':''}}" >Cursos</a>
            {{-- <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index')? 'active':''}}" >Cursos</a> --}}
            {{-- @dump(request()->routeIs('cursos.index'))} --}}
        </li>
        <li>
            <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')? 'active':''}}" >Nosotros</a>
            {{-- @dump(request()->routeIs('nosotros')) --}}
        </li>
        <li>
            <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index')? 'active':''}}">Contactanos</a>
        </li>
    </ul>
</nav>