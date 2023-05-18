<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);

        $formdata = $request->all();
        $newSingleComic = new Comic();
        $newSingleComic->fill($formdata);
        $newSingleComic->save();

        return redirect()->route('comics.index', $newSingleComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formdata = $request->all();
        $comic->update($formdata);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    public function validation($request)
    {
        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|max:50',
            'description' => 'nullable|max:200',
            'thumb' => 'nullable|max:255',
            'price' => 'required|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable',
            'type' => 'required|max:50',
            'artists' => 'nullable|max:200',
            'writers' => 'nullable|max:200'
        ], [
            'title.required' => "E' necessario inserire il titolo",
            'price.required' => "E' necessario inserire un prezzo valido di massimo 10 cifre",
            'type.required' => "E' necessario inserire almeno un tipo o più per un massimo di 50 caratteri"
        ]);

        $validator->validate();

        return $validator->validated();
    }
}
