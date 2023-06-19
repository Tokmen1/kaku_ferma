<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KakisController extends Controller
{
    public function index()
    {
        $kakis = Kakis::all();

        return view('kakis.index', compact('kakis'));
    }

    public function create()
    {
        return view('kakis.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Cipa_numurs' => 'required',
            'Vards' => 'required',
            'Dzimsanas_dati' => 'required',
            'Veselibas_stavoklis' => 'required',
            'Nopirkts' => 'required',
            'Vetarsts_PK' => 'nullable',
            'image' => 'nullable',
        ]);
        $kakis = Kakis::create($validatedData);
        return redirect()->route('kakis.index')->with('success', 'Kakis created successfully.');
    }

    public function show($id)
    {
        $kakis = Kakis::find($id);
        return view('kakis.show', compact('kakis'));
    }

    public function edit($id)
    {
        $kakis = Kakis::find($id);
        return view('kakis.edit', compact('kakis'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Cipa_numurs' => 'required',
            'Vards' => 'required',
            'Dzimsanas_dati' => 'required',
            'Veselibas_stavoklis' => 'required',
            'Nopirkts' => 'required',
            'Vetarsts_PK' => 'nullable',
            'image' => 'nullable',
        ]);
        $kakis = Kakis::find($id);
        $kakis->update($validatedData);
        return redirect()->route('kakis.index')->with('success', 'Kakis updated successfully.');
    }

    public function destroy($id)
    {
        $kakis = Kakis::find($id);
        $kakis->delete();
        return redirect()->route('kakis.index')->with('success', 'Kakis deleted successfully.');
    }
}