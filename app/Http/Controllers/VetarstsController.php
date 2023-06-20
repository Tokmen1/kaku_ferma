<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VetarstsController extends Controller
{
    public function index()
    {
        $vetarsts = Vetarsts::all();
        return view('vetarsts.index', compact('vetarsts'));
    }

    public function create()
    {
        return view('vetarsts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'PK' => 'required|unique:vetarsts',
            'Vārds' => 'required',
            'Uzvārds' => 'required',
            'Stāžs' => 'required',
            'Telefona_nr' => 'required',
        ]);
        Vetarsts::create($validatedData);
        return redirect()->route('vetarsts.index')->with('success', 'Vetārsts has been created successfully.');
    }

    public function show(Vetarsts $vetarsts)
    {
        return view('vetarsts.show', compact('vetarsts'));
    }

    public function edit(Vetarsts $vetarsts)
    {
        return view('vetarsts.edit', compact('vetarsts'));
    }

    public function update(Request $request, Vetarsts $vetarsts)
    {
        $validatedData = $request->validate([
            'PK' => 'required|unique:vetarsts,PK,' . $vetarsts->id,
            'Vārds' => 'required',
            'Uzvārds' => 'required',
            'Stāžs' => 'required',
            'Telefona_nr' => 'required',
        ]);

        $vetarsts->update($validatedData);
        return redirect()->route('vetarsts.index')->with('success', 'Vetārsts has been updated successfully.');
    }

    public function destroy(Vetarsts $vetarsts)
    {
        $vetarsts->delete();
        return redirect()->route('vetarsts.index')->with('success', 'Vetārsts has been deleted successfully.');
    }
}
