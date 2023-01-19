
<nav class="navbar bg-light navbar-expand-md bg-faded justify-content-center">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand d-flex w-50 me-auto">Ticketsysteem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar">
            <ul class="nav navbar-nav ms-auto w-100 justify-content-end">

                @auth
                    @if(Auth::user() &&  Auth::user()->is_admin == 1){
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create-events') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('event.index') }}">Eventlist</a>
                    </li>
                    }@endif
                @endauth
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li><li class="nav-item active">
                    <a class="nav-link" href="{{ route('showEvents') }}">Eventementen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Over Ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link" type="submit">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
