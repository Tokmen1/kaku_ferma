<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KakisPardevejs;

class KakisPardevejsController extends Controller
{
    public function index()
    {
        $kakisPardevejs = KakisPardevejs::all();
        return view('kakis_pardevejs.index', compact('kakisPardevejs'));
    }

    public function create()
    {
        return view('kakis_pardevejs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kakis_id' => 'required',
            'pardevejs_id' => 'required',
        ]);
        KakisPardevejs::create($validatedData);
        return redirect()->route('kakis_pardevejs.index')->with('success', 'KakisPardevejs created successfully.');
    }

    public function show(KakisPardevejs $kakisPardevejs)
    {
        return view('kakis_pardevejs.show', compact('kakisPardevejs'));
    }

    public function edit(KakisPardevejs $kakisPardevejs)
    {
        return view('kakis_pardevejs.edit', compact('kakisPardevejs'));
    }

    public function update(Request $request, KakisPardevejs $kakisPardevejs)
    {
        $validatedData = $request->validate([
            'kakis_id' => 'required',
            'pardevejs_id' => 'required',
        ]);
        $kakisPardevejs->update($validatedData);
        return redirect()->route('kakis_pardevejs.index')->with('success', 'KakisPardevejs updated successfully.');
    }

    public function destroy(KakisPardevejs $kakisPardevejs)
    {
        $kakisPardevejs->delete();
        return redirect()->route('kakis_pardevejs.index')->with('success', 'KakisPardevejs deleted successfully.');
    }
}
