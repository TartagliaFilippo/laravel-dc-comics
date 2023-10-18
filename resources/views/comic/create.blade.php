@extends('layouts.app')

@section('main-content')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista Fumetti</a>
        <h1>Crea un Fumetto</h1>
        <form method="POST" action="{{ route('comics.store') }}" class="row g-3">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <label for="thumb">Percorso immagine</label>
            <input type="url" name="thumb" id="thumb">
        </form>
    </div>
@endsection
