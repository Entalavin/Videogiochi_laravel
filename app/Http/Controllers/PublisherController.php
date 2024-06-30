<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function validateDataPub(Request $request) //funzione privata alla quale passo l'oggetto request, l'ho messa fuori la validazione perché mi serve uguale in più punti.
     {
         return $request->validate([
             'name' => 'required',
             'nationality' => 'required',
        ]);
     }
    public function index()
    {
        $publishers = Publisher::paginate(7);
        return view('admin.publishers.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedDataPub = $this->validateDataPub($request);
        $publisher = new Publisher();
        $publisher->fill($validatedDataPub);
        $publisher->save();
        return redirect()->route('admin.publishers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publishers.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedDataPub = $this->validateDataPub($request);
        $publisher = Publisher::find($id);
        $publisher->update($validatedDataPub);

        return redirect()->route('admin.publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
