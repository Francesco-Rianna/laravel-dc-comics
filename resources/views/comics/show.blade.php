@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center  p-5">
    <div class="card mt-2" style="width: 18rem;">
        <img src="https://picsum.photos/200/300" class="card-img-top" alt="logo-comic">
        <div class="card-body bg-card-body">
            <h5 class="card-title">{{$comics->title}}</h5>
            <p class="card-text">{{$comics->description}}</p>
            <div>Prezzo:{{$comics->price}}</div>
            <div>Data di uscita : {{$comics->sale_date}}</div>
            <div>serie:{{$comics->series}}</div>
            <div>tipo: {{$comics->type}}</div>
        <div class="d-flex justify-content-between mt-5">
            <div>
                <button class=" ms -1 bg-primary text-white px-1 border-primary rounded"> <a href={{ route('comics.edit', ['comic' => $comics->id]) }}>Modifica prodotto</a></button >
            </div>

            <div>
                <form action="{{route('comics.destroy', ['comic' =>$comics->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit">elimina</button>
                </form>

            </div>

        </div>

        </div>
    </div>
</div>
@endsection