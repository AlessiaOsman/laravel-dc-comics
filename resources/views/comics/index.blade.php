@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div id='main-comics-content'>
        <div class='container'>
            <p class='comics-label'>CURRENT SERIES</p>
            <a href='{{route('comics.create')}}'><button>Crea nuovo fumetto</button></a>
            <ul class='row'>
                @foreach ($comics as $comic)
                    <li class='col'>
                        <a href='{{route('comics.show', $comic)}}'>
                            <div>
                                <img src='{{ $comic->thumb }}' />
                                <h4>{{ $comic->title }}</h4>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <button>LOAD MORE</button>
        </div>
    </div>

@endsection
