<hr>
<nav>
    <a href="{{ route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a> |
    <a href="{{ route('estadios.index')}}" class="{{ request()->routeIs('estadios.*') ? 'active' : '' }}">Estadios</a> |
    <a href="{{ route('equipos.index')}}" class="{{ request()->routeIs('equipos.*') ? 'active' : '' }}">Equipos</a> |
    <a href="{{ route('juegos.index')}}" class="{{ request()->routeIs('juegos.*') ? 'active' : '' }}">Juegos</a> |
    <a href="{{ route('nosotros')}}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a> |
</nav>
<hr> 