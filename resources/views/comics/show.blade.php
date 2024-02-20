@extends('layout.app')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="blue-container">
            <div class="my-container">
                @if ($comic->thumb == null)
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" class="thumb-comic">
                @else
                    <img src="{{ $comic['thumb'] }}" alt="" class="thumb-comic">
                @endif
            </div>
        </div>
    </div>


    <!-- Contenitore descrizione singolo fumetto -->
    <div class="my-container">
        <div class="row">

            <!-- Titolo -->
            <div class="col-8">
                <h2>{{ $comic['title'] }}</h2>

                <!-- Prezzo e descrizione -->
                <div class="row mt-4">
                    <div class="col-8 banner">
                        <div class="d-flex justify-content-between align-items-center">
                            <p>U.S. Price: <span class="text-white ms-2">{{ $comic['price'] }}</span></p>
                            <p class="text-uppercase">available</p>
                        </div>
                    </div>
                    <div class="col-4 banner">
                        <span class="text-center text-white">Check Availability &#9662</span>
                    </div>
                </div>
                <p class="mt-4">{{ $comic['description'] }}</p>
            </div>

            <!-- Adv image -->
            <div class="col-4">
                <div class="d-flex justify-content-end">
                    <span class="text-uppercase">advertisement</span>
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Contenitore informazioni singolo fumetto -->
    <div class="bg-grey">
        <div class="my-container">
            <div class="row">
                <div class="col-6 my-5">
                    <h3>Talent</h3>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex justify-content-between">
                            <span>Art By:</span>
                            <span class="color-blue">{{ $comic['artists'] }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Written By:</span>
                            <span class="color-blue">{{ $comic['writers'] }}</span>
                        </li>
                    </ul>
                </div>
                <div class="col-6 my-5">
                    <h3>Specs</h3>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex justify-content-between">
                            <span>Series:</span>
                            <span class="color-blue">{{ $comic['series'] }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Price:</span>
                            <span>{{ $comic['price'] }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>On sale date:</span>
                            <span>{{ $comic['sale_date'] }}</span>
                        </li>
                    </ul>
                </div>
                <!-- Bottone modifica ed elimina fumetto -->
                <div class="d-flex justify-content-center mb-3">
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-sm btn-danger">Modifica
                    </a>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger ms-3">Elimina</button>
                    </form>
                </div>
            </div>
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
