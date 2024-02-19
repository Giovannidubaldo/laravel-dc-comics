@extends('layout.app')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron"></div>

    <!-- Fumetti immagini -->
    <div class="comics-main">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 mt-4">
                        <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}" class="text-decoration-none">
                            <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid">
                            <h6 class="text-uppercase mt-3 text-white">{{ $comic['series'] }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="buttons d-flex justify-content-center mt-5">
            <button>Load More</button>
        </div>
    </div>

    <!-- Bottom - main -->
    <div class="bottom-main">
        <div class="container">
            <div class="row">

                <!-- Lista link -->
                <ul class="list-unstyled d-flex justify-content-center align-items-center">
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                        <a href="#">digital comics</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                        <a href="#">dc merchandising</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                        <a href="#">subscription</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                        <a href="#">comic shop locator</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                        <a href="#">dc power visa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
