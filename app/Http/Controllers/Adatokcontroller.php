<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adatka;

class Adatokcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adatok= adatka::all();
        return view('adatok.index')->with("adatok",$adatok);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adatok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['Név'=>'required|min:3|max:255',],
            ['Név.min'=>'A kategoria min 3 karakter',]
        );
        $adatok=new adatka();
        $adatok->name= $request->name;
        $adatok->save();
        return redirect()->route('adatok.index')->with('success','Kategoria sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $adatok=adatka::find($id);
        return view('adatok.show', compact('adatok'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adatok=adatka::find($id);
        return view('adatok.edit')->with('adatok',$adatok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            ['name'=>'required|min:3|max:255',],
            ['name.min'=>'A kategoria min 3 karakter',]
        );
        $adatok=adatka::find($id);
        $adatok->name= $request->name;
        $adatok->save();
        return redirect()->route('adatok.index')->with('success','Kategoria sikeresen modositva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adatok=adatka::find($id);
        $adatok->delete();
        return redirect()->route('adatok.index')->with('success','Kategoria sikeresen törölve.');
    }
}
