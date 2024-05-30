<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::All();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|min:5|max:15',
                'description' => 'required|string',
                'thumb' => 'required|url',
                'price' => 'required|numeric',
                'series' => 'required|string',
                'sale_date' => 'required|date',
                'type' => 'required|string',
            ],
            [
                'title.required'=> 'Il campo titolo è obbligatorio.',
                'description.required'=> 'Il campo descrizione è obbligatorio.',
                'thumb.required'=> 'Inserire url immagine ',
                'price.required' => 'Il campo prezzo è obbligatorio.',
                'price.numeric' => 'Il campo prezzo deve essere un numero.',
                'series.required' => 'Il campo serie è obbligatorio.',
                'sale_date.required' => 'Il campo data di vendita è obbligatorio.',
                'sale_date.date' => 'Il campo data di vendita deve essere una data valida.',
                'type.required' => 'Il campo tipo è obbligatorio.',
            ]
    );


            
        $formData = $request->all();
        // dd($formData);
        
        $newComic = new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumbnail_url = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];

        $newComic->fill($formData);
    
        
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics= Comic::find($id);

        return view('comics.show', compact('comics') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics= Comic::findOrFail($id);
        
        return view('comics.edit', compact('comics'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $comics= Comic::findOrFail($id);
        $formData = $request->all();

        $comics->update($formData);
        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics=Comic::findOrFail($id);
        $comics->delete();
        return redirect()->route('comics.index');
    }
}