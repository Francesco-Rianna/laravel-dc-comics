@extends('layouts.app')
@section('content')
<h1 class="text-center">Crea il fumetto</h1>
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

<div class="container">
    <form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3" >{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">URL dell'immagine</label>
        <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price') }}">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
    </div>

    <button type="submit" class="btn btn-primary">Crea Fumetto</button>
</form>

</div>
@endsection