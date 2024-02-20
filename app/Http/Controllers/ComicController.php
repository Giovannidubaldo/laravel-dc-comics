<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;  PER LA FUNZIONE DI VALIDAZIONE DEL FORM SI DEVE IMPORTARE QUESTO
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
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
    public function store(StoreComicRequest $request)
    {
        $form_comic = $request->all();

        $newComic = new Comic();

        $newComic->fill($form_comic);

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
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
        $form_comic = $request->all();

        $newComic = Comic::find($id);

        $newComic->update($form_comic);

        $newComic->update();
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }

    // FUNZIONE BASE PER LA VALIDAZIONE DEL FORM

    // private function validation($data)
    // {
    //     $validator = Validator::make(
    //         $data,
    //         [
    //             'title' => 'required|min:5|max:255',
    //             'description' => 'required',
    //             'price' => 'required|max:30',
    //             'series' => 'required|min:5|max:100',
    //             'sale_date' => 'required',
    //             'type' => 'required|max:50',
    //             'artists' => 'required',
    //             'writers' => 'required'
    //         ],
    //         [
    //             'title.required' => 'Il titolo è obbligatorio',
    //             'title.min' => 'Il titolo deve contenere almeno 5 caratteri',
    //             'title.max' => 'Il titolo deve contenere massimo 255 caratteri',
    //             'description.required' => 'La descrizione è obbligatoria',
    //             'price.required' => 'Il prezzo è obbligatorio',
    //             'price.max' => 'Il prezzo deve contenere massimo 30 caratteri',
    //             'series.required' => 'La serie è obbligatoria',
    //             'series.min' => 'La serie deve contenere almeno 5 caratteri',
    //             'series.max' => 'La serie deve contenere massimo 100 caratteri',
    //             'sale_date.required' => 'La data è obbligatoria',
    //             'type.required' => 'Il tipo è obbligatorio',
    //             'type.max' => 'Il tipo deve contenere massimo 50 caratteri',
    //             'artists.required' => 'Gli artisti sono obbligatori',
    //             'writers.required' => 'Gli scrittori sono obbligatori'

    //         ]
    //     )->validate();

    //     return $validator;
    // }
}
