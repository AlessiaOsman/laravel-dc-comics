<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', [ComicController::class, 'index']) -> name('comics.index');

Route::get('/characters', function () {
    $name = 'characters';
    return view('characters.index', compact('name'));
}) -> name('characters');

Route::get('/movies', function () {
    $name = 'movies';
    return view('movies.index', compact('name'));
}) -> name('movies');

Route::get('/tv', function () {
    $name = 'tv';
    return view('tv.index', compact('name'));
}) -> name('tv');

Route::get('/games', function () {
    $name = 'games';
    return view('games.index', compact('name'));
}) -> name('games');

Route::get('/collectibles', function () {
    $name = 'collectibles';
    return view('collectibles.index', compact('name'));
}) -> name('collectibles');

Route::get('/videos', function () {
    $name = 'videos';
    return view('videos.index', compact('name'));
}) -> name('videos');

Route::get('/fans', function () {
    $name = 'fans';
    return view('fans.index', compact('name'));
}) -> name('fans');

Route::get('/news', function () {
    $name = 'news';
    return view('news.index', compact('name'));
}) -> name('news');

Route::get('/shop', function () {
    $name = 'shop';
    return view('shop.index', compact('name'));
}) -> name('shop');


Route::get('/comics/create', [ComicController::class, 'create']) ->name('comics.create');

Route::get('/comics/{comic}', [ComicController::class, 'show'] ) -> name('comics.show');
