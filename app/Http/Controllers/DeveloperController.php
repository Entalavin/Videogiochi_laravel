<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function validateDataDev(Request $request) //funzione privata alla quale passo l'oggetto request, l'ho messa fuori la validazione perché mi serve uguale in più punti.
     {
         return $request->validate([
             'name' => 'required',
             'nationality' => 'required',
        ]);
     }
    public function index()
    {
        $developers = Developer::paginate(7);
        return view('admin.developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.developers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedDataDev = $this->validateDataDev($request);
        $developer = new Developer();
        $developer->fill($validatedDataDev);
        $developer->save();
        return redirect()->route('admin.developers.index');

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
        $developer = Developer::find($id);
        return view('admin.developers.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required|string|min:3|max:255',
        //     'nationality' => 'required|string',
        // ]);
        $validatedDataDev = $this->validateDataDev($request);
        $developer = Developer::find($id);
        $developer->update($validatedDataDev);

        return redirect()->route('admin.developers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
