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
            'Dzimsanas_dati' => 'required|date',
            'Veselibas_stavoklis' => 'required|integer',
            'Nopirkts' => 'required|boolean',
            'Vetersts_PK' => 'required',
            'Iepircējs_PK' => 'required',
            'Pārdevēja_PK' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kakis = new Kakis();
        $kakis->Cipa_numurs = $validatedData['Cipa_numurs'];
        $kakis->Vards = $validatedData['Vards'];
        $kakis->Dzimsanas_dati = $validatedData['Dzimsanas_dati'];
        $kakis->Veselibas_stavoklis = $validatedData['Veselibas_stavoklis'];
        $kakis->Nopirkts = $validatedData['Nopirkts'];
        $kakis->Vetersts_PK = $validatedData['Vetersts_PK'];
        $kakis->Iepircējs_PK = $validatedData['Iepircējs_PK'];
        $kakis->Pārdevēja_PK = $validatedData['Pārdevēja_PK'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $kakis->image = $imagePath;
        }

        $kakis->save();

        return redirect()->route('kakis.index')->with('success', 'Kakis created successfully!');
    }

    public function show($id)
    {
        $kakis = Kakis::findOrFail($id);
        return view('kakis.show', compact('kakis'));
    }

    public function edit($id)
    {
        $kakis = Kakis::findOrFail($id);
        return view('kakis.edit', compact('kakis'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Cipa_numurs' => 'required',
            'Vards' => 'required',
            'Dzimsanas_dati' => 'required|date',
            'Veselibas_stavoklis' => 'required|integer',
            'Nopirkts' => 'required|boolean',
            'Vetersts_PK' => 'required',
            'Iepircējs_PK' => 'required',
            'Pārdevēja_PK' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kakis = Kakis::findOrFail($id);
        $kakis->Cipa_numurs = $validatedData['Cipa_numurs'];
        $kakis->Vards = $validatedData['Vards'];
        $kakis->Dzimsanas_dati = $validatedData['Dzimsanas_dati'];
        $kakis->Veselibas_stavoklis = $validatedData['Veselibas_stavoklis'];
        $kakis->Nopirkts = $validatedData['Nopirkts'];
        $kakis->Vetersts_PK = $validatedData['Vetersts_PK'];
        $kakis->Iepircējs_PK = $validatedData['Iepircējs_PK'];
        $kakis->Pārdevēja_PK = $validatedData['Pārdevēja_PK'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $kakis->image = $imagePath;
        }

        $kakis->save();

        return redirect()->route('kakis.index')->with('success', 'Kakis updated successfully!');
    }

    public function destroy($id)
    {
        $kakis = Kakis::findOrFail($id);
        $kakis->delete();

        return redirect()->route('kakis.index')->with('success', 'Kakis deleted successfully!');
    }
}