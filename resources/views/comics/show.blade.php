@extends('layouts.main')

@section('cdns')
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@endsection

@section('main-content')
    <div id='main-comic-card-content'>
        <div class='section-blue'>
            <div class='section-blue-container container'>

                <img class='container' src='{{ $comic->thumb }}' />
            </div>
        </div>
        <div class='container'>
            <div class='comic-card'>
                <div class='left'>
                    <h1 class='card-title'>{{ $comic->title }}</h1>
                    <a href='{{route('comics.edit', $comic->id)}}'>Mofifica</a>
                    <div class='card-header'>
                        <div class='card-header-left'>
                            <h5 class='price'>U.S. Price: <span>{{ $comic->price }}</span></h5>
                            <h5>AVAILABLE</h5>
                        </div>
                        <div class='card-header-right'>
                            <h5>Check Availability</h5>
                        </div>
                    </div>
                    <p class='card-description'>{{ $comic->description }}</p>

                </div>

                <div class='right'>
                    <h4>ADVERTISEMENT</h4>
                    <img src='{{ Vite::asset('resources/img/adv.jpg') }}' />
                </div>

            </div>
        </div>
        <div class='comic-info-container'>
            <div class='container info-table'>
                <div class='table-container'>
                    <h2>Talent</h2>
                    <table>
                        <tr>
                            <td>Art by:</td>
                            <td>{{ $comic->artists }}</td>
                        </tr>
                         <tr>
                            <td>Written by:</td>
                            <td>{{ $comic->writers }}</td>
                        </tr>
                    </table>
                </div>
                <div class='table-container'>
                    <h2>Specs</h2>
                    <table>
                        <tr>
                            <td>Series:</td>
                            <td>{{ $comic->series }}</td>
                        </tr>
                          <tr>
                            <td>U.S. Price:</td>
                            <td>{{ $comic->price }}</td>
                        </tr>
                        <tr>
                            <td>On sale date:</td>
                            <td>{{ $comic->sale_date }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
