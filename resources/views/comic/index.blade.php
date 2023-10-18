@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <div class="container">
        <h1>Lista Fumetti</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un nuovo Fumetto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Data di creazione</th>
                    <th scope="col">Ultima modifica</th>
                    <th scope="col">Guarda Dettagli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic['title'] }}</td>
                        <td scope="col">{{ $comic['price'] }}</td>
                        <td scope="col">{{ $comic['series'] }}</td>
                        <td scope="col">{{ $comic['sale_date'] }}</td>
                        <td scope="col">{{ $comic['type'] }}</td>
                        <td scope="col">{{ $comic['created_at'] }}</td>
                        <td scope="col">{{ $comic['updated_at'] }}</td>
                        <td><a href="{{ route('comics.show', $comic) }}"><i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
