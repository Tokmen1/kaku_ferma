<?php

namespace App\Http\Controllers;

use App\Models\Iepircejs;
use Illuminate\Http\Request;
use App\Models\Kakis;

class IepircejsController extends Controller
{
    public function index()
    {
        $iepirceji = Iepircejs::all();
        return view('iepirceji.index', compact('iepirceji'));
    }

    public function getKakaIepircejs($kaka_cipa_numurs)
    {
        $kakis = Kakis::where('Cipa_numurs', $kaka_cipa_numurs)->first();
        if (!$kakis) {
            return response()->json(['error' => 'kaka iepircejs not found'], 404);
        }
        $iepircejs = $kakis->iepirceji()->first();

        return response()->json($iepircejs);
    }

    public function create()
    {
        return view('iepirceji.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'PK' => 'required',
            'Vārds' => 'required',
            'Uzvārds' => 'required',
            'Telefona_nr' => 'required',
        ]);

        Iepircejs::create($request->all());

        return redirect()->route('iepirceji.index')
            ->with('success', 'Iepircējs has been created successfully.');
    }

    public function show($id)
    {
        $iepircejs = Iepircejs::findOrFail($id);
        return view('iepirceji.show', compact('iepircejs'));
    }

    public function edit($id)
    {
        $iepircejs = Iepircejs::findOrFail($id);
        return view('iepirceji.edit', compact('iepircejs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'PK' => 'required',
            'Vārds' => 'required',
            'Uzvārds' => 'required',
            'Telefona_nr' => 'required',
        ]);

        $iepircejs = Iepircejs::findOrFail($id);
        $iepircejs->update($request->all());

        return redirect()->route('iepirceji.index')
            ->with('success', 'Iepircējs has been updated successfully.');
    }

    public function destroy($id)
    {
        $iepircejs = Iepircejs::findOrFail($id);
        $iepircejs->delete();

        return redirect()->route('iepirceji.index')
            ->with('success', 'Iepircējs has been deleted successfully.');
    }
}
