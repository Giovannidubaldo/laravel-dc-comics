<header>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-2">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                        <a href="{{ route('homepage') }}">home</a>
                    </li>
                    <li><a href="{{ route('comics.index') }}">comics</a></li>
                    <li><a href="#">movies</a></li>
                    <li><a href="#">tv</a></li>
                    <li><a href="#">collectibles</a></li>
                    <li><a href="#">games</a></li>
                    <li><a href="#">videos</a></li>
                    <li><a href="#">fans</a></li>
                    <li><a href="#">news</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">shop
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</header>
