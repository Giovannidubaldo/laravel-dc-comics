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
    public function store(Request $request)
    {
        $form_comic = $request->all();

        $newComic = new Comic();
        $newComic->title = $form_comic['title'];
        $newComic->description = $form_comic['description'];
        $newComic->thumb = $form_comic['thumb'];
        $newComic->price = $form_comic['price'];
        $newComic->series = $form_comic['series'];
        $newComic->sale_date = $form_comic['sale_date'];
        $newComic->type = $form_comic['type'];
        $newComic->artists = $form_comic['artists'];
        $newComic->writers = $form_comic['writers'];

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
    public function update(Request $request, $id)
    {
        $form_comic = $request->all();

        $newComic = Comic::find($id);
        $newComic->title = $form_comic['title'];
        $newComic->description = $form_comic['description'];
        $newComic->thumb = $form_comic['thumb'];
        $newComic->price = $form_comic['price'];
        $newComic->series = $form_comic['series'];
        $newComic->sale_date = $form_comic['sale_date'];
        $newComic->type = $form_comic['type'];
        $newComic->artists = $form_comic['artists'];
        $newComic->writers = $form_comic['writers'];

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
        //
    }
}
