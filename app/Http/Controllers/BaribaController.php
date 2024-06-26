<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bariba;
use App\Models\Kakis;

class BaribaController extends Controller
{
    public function index()
    {
        $bariba = Bariba::all();
        return view('bariba.index', compact('bariba'));
    }

    public function getKakaBariba($kaka_cipa_numurs)
    {
        $kakis = Kakis::where('Cipa_numurs', $kaka_cipa_numurs)->first();

        if (!$kakis) {
            return response()->json(['error' => 'kakis not found'], 404);
        }
        $baribas = $kakis->baribas()->get();

        return response()->json($baribas);
    }

    public function create()
    {
        return view('bariba.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nosaukums' => 'required',
            'Razotajs' => 'required',
            'Ir_biologisks' => 'boolean',
        ]);

        Bariba::create($request->all());

        return redirect()->route('bariba.index')
            ->with('success', 'Bariba created successfully.');
    }

    public function show(Bariba $bariba)
    {
        return view('bariba.show', compact('bariba'));
    }

    public function edit(Bariba $bariba)
    {
        return view('bariba.edit', compact('bariba'));
    }

    public function update(Request $request, Bariba $bariba)
    {
        $request->validate([
            'Nosaukums' => 'required',
            'Razotajs' => 'required',
            'Ir_biologisks' => 'boolean',
        ]);

        $bariba->update($request->all());

        return redirect()->route('bariba.index')
            ->with('success', 'Bariba updated successfully.');
    }

    public function destroy(Bariba $bariba)
    {
        $bariba->delete();

        return redirect()->route('bariba.index')
            ->with('success', 'Bariba deleted successfully.');
    }
}
