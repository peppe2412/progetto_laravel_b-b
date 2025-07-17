<nav class="navbar navbar-expand-lg shadow-sm p-2">
    <div class="container-fluid">
        <span class="nav-color fs-3 fw-bold mx-2"><a class="nav-link" aria-current="page"
                href="{{ route('homepage') }}">PEPPEB&b</a>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-4">
                <a class="nav-link fw-bold text-gray" href="{{ route('B&b') }}">B&b</a>
                <a class="nav-link fw-bold text-gray" href="">Chi siamo</a>
                @guest                    
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                            {{-- {{Auth::user()->name}} --}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                @endguest
                @auth
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao,
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profilo</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item logoutLink" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout</a></li>
                            <form class="d-none" action="{{route('logout')}}" method="POST" id="logout">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </div>

</nav>
