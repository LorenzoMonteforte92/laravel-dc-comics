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

        $data = [

            'comics' => $comics,
        ];

        return view('comics.index', $data);
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
        $formData = $request->all();

            $newComic = new Comic();
            // $newComic->title = $formData['title'];
            // $newComic->series = $formData['series'];
            // $newComic->description = $formData['description'];
            // $newComic->thumb = $formData['thumb'];
            // $newComic->type = $formData['type'];
            // $newComic->price = $formData['price'];
            // $newComic->sale_date = $formData['sale_date'];
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
        $comics = Comic::find($id);

        $data = [

            'comics' => $comics,
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);

        $data = [
            'comics' => $comics,
        ];

        return view('comics.edit', $data);
        
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
        //salvi in una variabile l'id del fumetto e accogli i dati dal form
        $comics = Comic::findOrFail($id);
        $formData = $request->all();

        //aggiorna il fumetto coi dai dal form
        $comics->update($formData);

        return redirect()->route('comics.show', ['comic' => $comics->id]);
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
