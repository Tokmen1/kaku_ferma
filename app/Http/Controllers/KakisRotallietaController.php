<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KakisRotallieta;

class KakisRotallietaController extends Controller
{
    public function index()
    {
        $kakisRotallieta = KakisRotallieta::all();
        return view('kakis_rotallieta.index', compact('kakisRotallieta'));
    }

    public function create()
    {
        return view('kakis_rotallieta.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kakis_cipa_numurs' => 'required',
            'rotallieta_id' => 'required',
            'ir_milakaa' => 'required',
        ]);
        KakisRotallieta::create($data);
        return redirect()->route('kakis_rotallieta.index')->with('success', 'Kakis-Rotallieta created successfully.');
    }

    public function show(KakisRotallieta $kakisRotallieta)
    {
        return view('kakis_rotallieta.show', compact('kakisRotallieta'));
    }

    public function edit(KakisRotallieta $kakisRotallieta)
    {
        return view('kakis_rotallieta.edit', compact('kakisRotallieta'));
    }

    public function update(Request $request, KakisRotallieta $kakisRotallieta)
    {
        $data = $request->validate([
            'kakis_cipa_numurs' => 'required',
            'rotallieta_id' => 'required',
            'ir_milakaa' => 'required',
        ]);
        $kakisRotallieta->update($data);
        return redirect()->route('kakis_rotallieta.index')->with('success', 'Kakis-Rotallieta updated successfully.');
    }

    public function destroy(KakisRotallieta $kakisRotallieta)
    {
        $kakisRotallieta->delete();
        return redirect()->route('kakis_rotallieta.index')->with('success', 'Kakis-Rotallieta deleted successfully.');
    }
}
