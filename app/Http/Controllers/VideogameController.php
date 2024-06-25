<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Developer;
use App\Models\Publisher;
use App\Models\Genre;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // private function validateVideogameData(Request $request)
    // return $request->validate([
    //     .
    //     .
    //     .
    //     .
    //     'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    //     ])


    public function index()
    {
        $videogames = Videogame::all();
        // $autori = Developer::all();
        // $editori = Publisher::all();
        // $categorie = Genre::all();
        return view('videogames', compact('videogames'));
    }

    public function index_admin()
    {
        $videogames = Videogame::all();
        // $autori = Developer::all();
        // $editori = Publisher::all();
        // $categorie = Genre::all();
        return view('admin.videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        //validare i dati
        //creare variabile $validateData = $this->validateVideogameData($request);
        $videogame = new Videogame(); //creo un'istanza

        $videogame->title = $request->title;
        $videogame->description = $request->description;
        $videogame->developer_id = $request->developer_id;
        $videogame->publisher_id = $request->publisher_id;
        $videogame->year = $request->year;

        $videogame->save();

        return redirect()->route('admin.videogames.index');


        // $videogame->fill($validateData)

        // gestiamo l'inserimento dell'immagine
        // $fileName = time() . '_' .$request->file('poster')->getClientOriginalName(); 
        // questo poster nella parentesi deve essere uguale al name sul form, id e for devono pure essere uguali. time serve per mettere il timestamp concatenato al nome del file per evitare refusi
        // $posterPath = $request->file('poster')->storeAs('posters', $filename, 'public'); carica l'immagine nella cartella storage/posters
        // $videogame->poster = $posterPath; salva il percorso nel campo del db
        

        //if($videogame->save()){$videogame->genres()->attach($validateData['genres'])};  attacca i dati nella tabella ponte
        // //return redirect->route('admin.videogames.index'nome della rotta giusta ovviamente); oppure dire che se c'è qualche errore rimane qua con messaggio di errore

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $videogame = Videogame::find($id);
        return view('show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
