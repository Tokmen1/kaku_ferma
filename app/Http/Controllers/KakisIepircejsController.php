<?php

namespace App\Http\Controllers;

use App\Models\KakisIepircejs;
use Illuminate\Http\Request;

class KakisIepircejsController extends Controller
{
    public function index()
    {
        $kakisIepircejs = KakisIepircejs::all();
        return view('kakis_iepircejs.index', compact('kakisIepircejs'));
    }

    public function create()
    {
        return view('kakis_iepircejs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kakis_čipa_numurs' => 'required',
            'iepircejs_pk' => 'required',
        ]);
        $kakisIepircejs = new KakisIepircejs();
        $kakisIepircejs->kakis_čipa_numurs = $validatedData['kakis_čipa_numurs'];
        $kakisIepircejs->iepircejs_pk = $validatedData['iepircejs_pk'];
        $kakisIepircejs->save();
        return redirect()->route('kakis_iepircejs.index')->with('success', 'KakisIepircejs created successfully.');
    }

    public function show(KakisIepircejs $kakisIepircejs)
    {
        return view('kakis_iepircejs.show', compact('kakisIepircejs'));
    }

    public function edit(KakisIepircejs $kakisIepircejs)
    {
        return view('kakis_iepircejs.edit', compact('kakisIepircejs'));
    }

    public function update(Request $request, KakisIepircejs $kakisIepircejs)
    {
        $validatedData = $request->validate([
            'kakis_čipa_numurs' => 'required',
            'iepircejs_pk' => 'required',
        ]);
        $kakisIepircejs->kakis_čipa_numurs = $validatedData['kakis_čipa_numurs'];
        $kakisIepircejs->iepircejs_pk = $validatedData['iepircejs_pk'];
        $kakisIepircejs->save();
        return redirect()->route('kakis_iepircejs.show', $kakisIepircejs)->with('success', 'KakisIepircejs updated successfully.');
    }

    public function destroy(KakisIepircejs $kakisIepircejs)
    {
        $kakisIepircejs->delete();
        return redirect()->route('kakis_iepircejs.index')->with('success', 'KakisIepircejs deleted successfully.');
    }
}
