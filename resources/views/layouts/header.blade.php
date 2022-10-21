{{-- <div class="header">
    <div class="logo-container">
        <a href="#">
            <img src="" alt="company logo">
        </a>
    </div>
</div> --}}

<nav class="navbar bg-light navbar-expand-md bg-faded justify-content-center">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand d-flex w-50 me-auto">Ticketsysteem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar">
            <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Over Ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
