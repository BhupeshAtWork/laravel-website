<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-laravel">
    <div class="container col-md-10">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::is('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->full_name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href={{ route('logout') }}>Logout</a>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
