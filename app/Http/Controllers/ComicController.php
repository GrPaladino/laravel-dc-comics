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
     */
    public function index()
    {
        $comics = Comic::paginate(10);
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
        $data = $this->validation($request->all());

        $comic = new Comic;

        $comic->fill($data);

        $comic->save();

        return redirect()->route('comics.show', compact('comic'))->with('message-class', 'alert-success')->with('message', 'Comic inserito correttamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));

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
        $data = $this->validation($request->all(), $comic->id);

        $comic->update($data);
        return redirect()->route('comics.show', $comic)->with('message-class', 'alert-success')->with('message', 'Comic modificato correttamente.');
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

        return redirect()->route('comics.index')->with('message-class', 'alert-danger')->with('message', 'Comic eliminato.');
    }


    private function validation($data, $id = null)
    {

        return Validator::make(
            $data,
            [
                'title' => 'required|string|max:200',
                "description" => "nullable|string",
                'thumb' => "nullable|URL",
                "price" => "required|numeric|decimal:2",
                "series" => "required|string",
                "sale_date" => "nullable|date",
                "type" => "required|string|max:30",
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.string' => 'Il titolo deve essere una stringa',
                'title.max' => 'Il titolo deve massimo di 200 caratteri',

                'description.string' => 'La descrizione deve essere una stringa',

                'thumb.URL' => "Il percorso deve contenere un url valido",

                'price.required' => 'Il numero è obbligatorio',
                'price.integer' => 'Il numero deve essere un numero',
                'price.decimal' => 'Il numero deve avere due decimali',

                'series.required' => 'La serie è obbligatoria',
                'series.string' => 'La descrizione deve essere una stringa',

                'sale_date.date' => 'La data deve essere di tipo data: yy-mm-dd',

                'type.required' => 'Il tipo è obbligatorio',
                'type.string' => 'Il tipo deve essere una stringa',
                'type.in' => 'Il tipo deve un valore massimo di 30 caratteri',
            ]
        )->validate();
    }
}
