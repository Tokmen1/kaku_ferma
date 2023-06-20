<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KakisBariba;
use App\Models\Kakis;
use App\Models\Bariba;

class KakisBaribaController extends Controller
{
    public function index()
    {
        $kakisBaribas = KakisBariba::all();
        return view('kakis_bariba.index', compact('kakisBaribas'));
    }

    public function create()
    {
        $kakisi = Kakis::all();
        $baribas = Bariba::all();
        return view('kakis_bariba.create', compact('kakisi', 'baribas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kakis_id' => 'required',
            'bariba_id' => 'required',
        ]);

        KakisBariba::create([
            'kakis_id' => $request->kakis_id,
            'bariba_id' => $request->bariba_id,
        ]);

        return redirect()->route('kakis_bariba.index')->with('success', 'Kakis-Bariba relationship created successfully.');
    }

    public function show($id)
    {
        $kakisBariba = KakisBariba::findOrFail($id);
        return view('kakis_bariba.show', compact('kakisBariba'));
    }

    public function edit($id)
    {
        $kakisBariba = KakisBariba::findOrFail($id);
        $kakisi = Kakis::all();
        $baribas = Bariba::all();
        return view('kakis_bariba.edit', compact('kakisBariba', 'kakisi', 'baribas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kakis_id' => 'required',
            'bariba_id' => 'required',
        ]);

        $kakisBariba = KakisBariba::findOrFail($id);
        $kakisBariba->update([
            'kakis_id' => $request->kakis_id,
            'bariba_id' => $request->bariba_id,
        ]);

        return redirect()->route('kakis_bariba.index')->with('success', 'Kakis-Bariba relationship updated successfully.');
    }

    public function destroy($id)
    {
        $kakisBariba = KakisBariba::findOrFail($id);
        $kakisBariba->delete();

        return redirect()->route('kakis_bariba.index')->with('success', 'Kakis-Bariba relationship deleted successfully.');
    }
}
