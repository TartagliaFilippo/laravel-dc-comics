@extends('layouts.app')

@section('main-content')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista Fumetti</a>
        <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Torna al dettaglio Fumetto</a>
        <h1>Modifica un Fumetto</h1>
        <form method="POST" action="{{ route('comics.update', $comic) }}" class="row g-3">

            @csrf
            @method('PUT')

            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $comic['title'] }}">

            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $comic['description'] }}</textarea>

            <label for="thumb">Percorso immagine</label>
            <input type="url" name="thumb" id="thumb" class="form-control" value="{{ $comic['thumb'] }}">

            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" class="form-control" value="{{ $comic['price'] }}">

            <label for="series">Serie</label>
            <input type="text" id="series" name="series" class="form-control" value="{{ $comic['series'] }}">

            <label for="sale_date">Data di uscita</label>
            <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{ $comic['sale_date'] }}">

            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type" class="form-control" value="{{ $comic['type'] }}">

            <button class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
