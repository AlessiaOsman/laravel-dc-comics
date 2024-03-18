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
        @include('includes.comics.form')

    </div>


@endsection
