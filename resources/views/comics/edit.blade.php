@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Modifica prodotto: {{$comics->title}}</h1>
    <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
    <form action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="POST">

        @csrf
         @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value={{$comics->title}}>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"  required>{{$comics->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">URL dell'immagine</label>
                <input type="url" class="form-control" id="thumb" name="thumb" value={{$comics->thumb}} required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required value={{$comics->price}}>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value={{$comics->series}} required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value={{$comics->sale_date}} required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required value={{$comics->type}}>
            </div>

            <button type="submit" class="btn btn-primary">Modifica il fumetto</button>
    </form>
    
</div>
@endsection