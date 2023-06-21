<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rotallieta;
use App\Models\Kakis;

class RotallietaController extends Controller
{
    public function index()
    {
        $rotallietas = Rotallieta::all();
        return view('rotallietas.index', compact('rotallietas'));
    }

    public function getKakaRotalllietas($kaka_cipa_numurs)
    {
        // Retrieve the cat based on the provided Čipa_numurs
        $kakis = Kakis::where('Cipa_numurs', $kaka_cipa_numurs)->first();

        if (!$kakis) {
            return response()->json(['error' => 'Cat not found'], 404);
        }

        // Retrieve the toys related to the cat using the Kaķis_Rotaļlieta relationship
        $rotallietas = $kakis->rotallietas;

        return response()->json($rotallietas);
    }

    public function create()
    {
        return view('rotallietas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nosaukums' => 'required',
            'Tips' => 'required',
        ]);

        Rotallieta::create($validatedData);

        return redirect()->route('rotallietas.index')->with('success', 'Rotallietas record has been created successfully!');
    }

    public function show(Rotallieta $rotallieta)
    {
        return view('rotallietas.show', compact('rotallieta'));
    }

    public function edit(Rotallieta $rotallieta)
    {
        return view('rotallietas.edit', compact('rotallieta'));
    }

    public function update(Request $request, Rotallieta $rotallieta)
    {
        $validatedData = $request->validate([
            'Nosaukums' => 'required',
            'Tips' => 'required',
        ]);

        $rotallieta->update($validatedData);

        return redirect()->route('rotallietas.index')->with('success', 'Rotallietas record has been updated successfully!');
    }

    public function destroy(Rotallieta $rotallieta)
    {
        $rotallieta->delete();

        return redirect()->route('rotallietas.index')->with('success', 'Rotallietas record has been deleted successfully!');
    }
}
