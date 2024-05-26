@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card mt-2" style="width: 32rem;">
        <img src="https://picsum.photos/200/300" class="card-img-top" alt="logo-comic">
        <div class="card-body">
        <h5 class="card-title">{{$comics->title}}</h5>
        <p class="card-text">{{$comics->description}}</p>
        <div>Prezzo:{{$comics->price}}</div>
        <div>Data di uscita : {{$comics->sale_date}}</div>
        <div>serie:{{$comics->series}}</div>
        <div>tipo: {{$comics->type}}</div>
        <div class="d-flex justify-content-between mt-5">
            <button class=" bg-primary text-white px-3 py-1  border-primary rounded " ><a href={{ route('comics.index') }}>Torna alla pagina dei fumetti</a>
            <button class=" bg-primary text-white px-3 py-1  border-primary rounded"> <a href={{ route('comics.edit', ['comic' => $comics->id]) }}>Modifica prodotto</a></button >
        </div>

        </div>
    </div>
</div>
@endsection