@extends('layouts.app')


@section('main-content')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla lista Fumetti</a>
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica Fumetto</a>
        <h1 class="mb-3">Dettaglio Fumetto</h1>
        <div class="row justify-content-center mb-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top mb-3" alt="">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic['series'] }}</h6>
                        <p class="card-text">{{ $comic['description'] }}</p>
                        <span><strong>Data di uscita</strong>: {{ $comic['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
