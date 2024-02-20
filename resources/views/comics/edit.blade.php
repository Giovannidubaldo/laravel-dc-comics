@extends('layout.app')

@section('content')
    {{-- <div class="jumbotron"></div> --}}

    <!-- Form di inserimento nuovo comic -->
    <h2 class="text-center mt-5">Modifica comic</h2>
    <div class="container my-5">
        <div class="row">
            <form action="{{ route('comics.update', $comic->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group mb-3 col-6">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Titolo del comic"
                            class="form-control" value="{{ $comic->title }}" required>
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="thumb">Immagine</label>
                        <input type="text" name="thumb" id="thumb" placeholder="Immagine" class="form-control"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="price">Prezzo</label>
                        <input type="text" name="price" id="price" placeholder="Prezzo" class="form-control"
                            value="{{ $comic->price }}" required>
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="series">Serie</label>
                        <input type="text" name="series" id="series" placeholder="Serie" class="form-control"
                            value="{{ $comic->series }}" required>
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="sale_date">Data di uscita</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control"
                            value="{{ $comic->sale_date }}" required>
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="type">Tipo</label>
                        <input type="text" name="type" id="type" placeholder="Tipo" class="form-control"
                            value="{{ $comic->type }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="artists">Artisti</label>
                        <textarea name="artists" id="artists" cols="10" rows="5" class="form-control" required>{{ $comic->artists }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="writers">Scrittori</label>
                        <textarea name="writers" id="writers" cols="10" rows="5" class="form-control" required>{{ $comic->writers }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="20" rows="10" class="form-control" required>{{ $comic->description }}</textarea>
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
