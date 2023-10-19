@extends('layouts.app')

@section('main-content')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista Fumetti</a>
        <h1>Crea un Fumetto</h1>
        <form method="POST" action="{{ route('comics.store') }}" class="row g-3">

            @csrf
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <label for="thumb">Percorso immagine</label>
            <input type="url" name="thumb" id="thumb" class="form-control">
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" class="form-control">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" class="form-control">
            <label for="sale_date">Data di uscita</label>
            <input type="text" id="sale_date" name="sale_date" class="form-control">
            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type" class="form-control">
            <button class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
