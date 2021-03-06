<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login-page')}}">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register-page')}}">Sign in</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ auth()->user()->email }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout-page')}}">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
