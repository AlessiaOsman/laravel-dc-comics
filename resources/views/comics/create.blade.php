@extends('layouts.main')

@section('title', 'Aggiungi fumetto')

@section('cdns')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('main-content')
    <div class='container py-5'>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h1>I campi inseriti non sono corretti</h1>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row g-3" action='{{ route('comics.store') }}' method='POST'>
            @csrf {{-- Lo inserisco per il controllo del token --}}
            <div class="col-md-6">
                <label for="title" class="form-label">Nome fumetto</label>
                <input type="text" name='title' class="form-control" value='{{ old('title') }}'>
            </div>
            <div class="col-md-6">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name='series' class="form-control" value='{{ old('series') }}'>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name='description' class="form-control">{{ old('description') }}</textarea>
            </div>
            <div class="col-md-7">
                <label for="thumb" class="form-label">Url Immagine</label>
                <input type="url" name='thumb' class="form-control" value='{{ old('thumb') }}'>
            </div>
            <div class="col-md-5">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name='price' class="form-control" value='{{ old('price') }}'>
            </div>
            <div class="col-md-6">
                <label for="sale_date" class="form-label">Prezzo</label>
                <input type="date" name='sale_date' class="form-control" value='{{ old('sale_date') }}'>
            </div>
            <div class="col-md-6">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" name='type' class="form-control" value='{{ old('type') }}'>
            </div>
            <div class="col-md-6">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" name='artists' class="form-control" value='{{ old('artists') }}'>
            </div>
            <div class="col-md-6">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" name='writers' class="form-control" value='{{ old('writers') }}'>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
            </div>
        </form>

    </div>


@endsection
