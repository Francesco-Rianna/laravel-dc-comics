<div class="container d-flex justify-content-between aligne-items-center">
    <h1 class="sec-home"><a href={{route('home')}}>Home</a></h1>
    <div class="right d-flex align-items-center">
        <h3 class="sec-comic"><a href={{route('comics.index')}}>I nostri fumetti</a></h3>
    </div>
</div>
<div class="container d-flex mb-2">
    <h5 class="create">Wow abbiamo aggiunto una sezione per un tuo fumetto clicca qui</h5>
    <button class="ms-2 bg-primary text-white px-3 border-primary rounded"><a href={{route('comics.create')}}>Clicca</a></button>
</div>

