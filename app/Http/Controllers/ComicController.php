<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        return view('comics.create', ['comic' => new Comic()]);
    }

    public function store(StoreComicRequest $request){

        $data = $request->validated();

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

    public function edit(Comic $comic){
        return view('comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, Comic $comic){

        $data = $request->validated();

        //Se una delle chiavi sopra avesse anche unique:comics dovrei trasformare il valore in un array
        //Separare i campi con una virgola
        //importo Rule e al posto di unique:comics metto Rule::unique('comics')->ignore($comic->id)

        $comic->fill($data);
        $comic->slug = Str::slug($data['title']);
        $comic->save();
        return to_route('comics.show', $comic->id);

        //invece di scrivere fill e save posso scrivere queste istruzioni:
        //$data['slug] = Str::slug($data['title]);
        //$comic->update($data);
    }

    public function destroy(Comic $comic){
        $comic->delete();
        return to_route('comics.index')->with('message', "$comic->title è stato eliminato con successo");
    }

}
