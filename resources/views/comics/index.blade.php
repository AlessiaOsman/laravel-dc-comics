@extends('layouts.main')

@section('title', $name)

@section('main-content')
    <div id='main-comics-content'>
        <div class='container'>
            <p class='comics-label'>CURRENT SERIES</p>
            <ul class='row'>
                @foreach ($comics as $index => $comic)
                    <li class='col'>
                        <a href='{{ route('comic', $index) }}'>
                            <div>
                                <img src='{{ $comic['thumb'] }}' />
                                <h4>{{ $comic['title'] }}</h4>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <button>LOAD MORE</button>
        </div>
    </div>

@endsection
