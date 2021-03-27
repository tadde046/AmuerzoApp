<nav class="navbar bg-dimgray shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
        <span><img src="https://i.pinimg.com/originals/70/38/2f/70382fb22583c58066be57f2e2e6fb8a.png" alt="10" height="50" width="50"> <b>{{ config('app.name', 'Almuerzo') }}</b> </span>
	</a>

    <ul class="nav nav-pills  ml-auto">
        @guest
                <li  class="nav-item{{request()->routeIs('login') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('login')}}">Iniciar sesion</a>
                </li>
        @if (Route::has('register'))
                <li nav-item class="nnav-item{{request()->routeIs('register') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('register')}}">Registrate</a>
                </li>

        @endif
           
        
        @else
            <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }}
                     </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                </div>
            </li>
        @endguest
    
    
        <li nav-item class="nnav-item{{request()->routeIs('Home') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('home')}}">Pagina principal</a>
        </li>
    
    
        <li nav-item class="nnav-item{{request()->routeIs('salas') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('salas.index')}}">Salas</a>
        </li>
    
    
        <li class="nav-item {{request()->routeIs('funciones') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('funciones.index') }}">Funcionamiento</a>
        </li>
    @guest

	@else 
		<li class="nav-item">
			<a class="nav-link" href="#" onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">Cerrar sesion</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
		
	        </form>

	@endguest

	        </ul>
	    </nav>
	        
    
    
    </ul>        
</nav>