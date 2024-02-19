@extends('layout.app');

@section('content')
    {{-- <div class="jumbotron"></div> --}}

    <!-- Form di inserimento nuovo comic -->
    <h2 class="text-center mt-5">Aggiungi un nuovo comic</h2>
    <div class="container my-5">
        <div class="row">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="row">

                    <div class="form-group mb-3 col-6">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Titolo del comic"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="thumb">Immagine</label>
                        <input type="text" name="thumb" id="thumb" placeholder="Immagine" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="price">Prezzo</label>
                        <input type="text" name="price" id="price" placeholder="Prezzo" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="series">Serie</label>
                        <input type="text" name="series" id="series" placeholder="Serie" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="sale_date">Data di uscita</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="type">Tipo</label>
                        <input type="text" name="type" id="type" placeholder="Tipo" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="artists">Artisti</label>
                        <textarea name="artists" id="artists" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="writers">Scrittori</label>
                        <textarea name="writers" id="writers" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="20" rows="10" class="form-control"></textarea>
                    </div>
                    <div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Salva</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
