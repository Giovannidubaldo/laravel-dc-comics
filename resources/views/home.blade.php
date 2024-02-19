@extends('layout.app')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron"></div>
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
