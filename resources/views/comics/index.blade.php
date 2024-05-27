@extends('layouts.app')

@section('content')
<div class="container">
    
    <h3 class="text-center">Ecco i nostri fumetti</h3>
    <div class="d-flex flex-wrap gap-2">
        @foreach ($comics as $comic)
        <div class="card mt-2" style="width: 18rem;">
            <img src={{$comic->thumb}} class="card-img-top" alt="logo-comic">
            <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            {{-- <p class="card-text">{{$comic->description}}</p> --}}
            <div>Prezzo:{{$comic->price}}</div>
            <div>Data di uscita : {{$comic->sale_date}}</div>
            <div>serie:{{$comic->series}}</div>
            <div>tipo: {{$comic->type}}</div>
            <button class="mt-5 bg-primary text-white px-3 py-1  border-primary rounded " ><a href={{ route('comics.show', ['comic' => $comic->id]) }}>Visualizza fumetto</a>
            </a></button>
            </div>
        </div>
        

            
        @endforeach
    </div>
</div>


@endsection
