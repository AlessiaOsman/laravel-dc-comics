@if ($comic->exists)
    <form class="row g-3" action='{{ route('comics.update', $comic->id) }}' method='POST'>
        @method('PUT')
        {{-- La direttiva sopra significa <input type='hidden' name='_method' value='PUT'> --}}
    @else
        <form class="row g-3" action='{{ route('comics.store') }}' method='POST'>
@endif
@csrf {{-- CREA UN TOKEN --}}
<div class="col-md-6">
    <label for="title" class="form-label">Nome fumetto</label>
    <input type="text" name='title' class="form-control" value='{{ old('title', $comic->title) }}'>
</div>
<div class="col-md-6">
    <label for="series" class="form-label">Serie</label>
    <input type="text" name='series' class="form-control" value='{{ old('series', $comic->series) }}'>
</div>
<div class="col-md-12">
    <label for="description" class="form-label">Descrizione</label>
    <textarea name='description' class="form-control">{{ old('description', $comic->description) }}</textarea>
</div>
<div class="col-md-7">
    <label for="thumb" class="form-label">Url Immagine</label>
    <input type="url" name='thumb' class="form-control" value='{{ old('thumb', $comic->thumb) }}'>
</div>
<div class="col-md-5">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" name='price' class="form-control" value='{{ old('price', $comic->price) }}'>
</div>
<div class="col-md-6">
    <label for="sale_date" class="form-label">Prezzo</label>
    <input type="date" name='sale_date' class="form-control" value='{{ old('sale_date', $comic->sale_date) }}'>
</div>
<div class="col-md-6">
    <label for="type" class="form-label">Tipologia</label>
    <input type="text" name='type' class="form-control" value='{{ old('type', $comic->type) }}'>
</div>
<div class="col-md-6">
    <label for="artists" class="form-label">Artisti</label>
    <input type="text" name='artists' class="form-control" value='{{ old('artists', $comic->artists) }}'>
</div>
<div class="col-md-6">
    <label for="writers" class="form-label">Scrittori</label>
    <input type="text" name='writers' class="form-control" value='{{ old('writers', $comic->writers) }}'>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">SALVA</button>
</div>
</form>
