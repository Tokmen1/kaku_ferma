<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pardevejs;

class PardevejsController extends Controller
{
    public function index()
    {
        $pardeveji = Pardevejs::all();
        return view('pardevejs.index', compact('pardeveji'));
    }

    public function create()
    {
        return view('pardevejs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'PK' => 'required|string',
            'Vards' => 'required|string',
            'Uzvards' => 'required|string',
            'Telefona_nr' => 'required|string',
            'Konta_nr' => 'required|string',
            'Kvalitate' => 'required|integer',
        ]);
        Pardevejs::create($validatedData);
        return redirect()->route('pardevejs.index')->with('success', 'Pārdevējs veiksmīgi pievienots.');
    }

    public function edit(Pardevejs $pardevejs)
    {
        return view('pardevejs.edit', compact('pardevejs'));
    }

    public function update(Request $request, Pardevejs $pardevejs)
    {
        $validatedData = $request->validate([
            'PK' => 'required|string',
            'Vards' => 'required|string',
            'Uzvards' => 'required|string',
            'Telefona_nr' => 'required|string',
            'Konta_nr' => 'required|string',
            'Kvalitate' => 'required|integer',
        ]);
        $pardevejs->update($validatedData);
        return redirect()->route('pardevejs.index')->with('success', 'Pārdevējs veiksmīgi atjaunots.');
    }

    public function destroy(Pardevejs $pardevejs)
    {
        $pardevejs->delete();
        return redirect()->route('pardevejs.index')->with('success', 'Pārdevējs veiksmīgi dzēsts.');
    }
}
