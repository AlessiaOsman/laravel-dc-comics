<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    public function index (){
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show (Comic $comic){
        return view('comics.show', compact('comic'));
    }

    public function create (){
        return view('comics.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);

        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->slug = Str::slug($data['title']); 
        $comic->save();
        //In alternativa al posto di riga 39 40 41 42 si possono scrivere queste istruzioni:
        //$data['slug] = Str::slug($data['title]);
        //Team::Create($data);

        return redirect()->route('comics.show', $comic); 
        //oppure to_route('comics.show', $comic->id)
    }
}
