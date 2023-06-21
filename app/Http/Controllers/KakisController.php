<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kakis;
use Illuminate\Support\Facades\Storage;

class KakisController extends Controller
{
    public function index()
    {
        $kakis = Kakis::all();
        return view('kakisIndex', ['kakis' => $kakis]);
    }
    public function getAllData()
    {
        $kakis = Kakis::all();
        return ['kakis' => $kakis];
        // return view('kakisIndex', ['kakis' => $kakis]);
    }
    public function create()
    {
        return view('kakis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'cipa_numurs' => 'required',
            'vards' => 'required',
            'dzimsanas_dati' => 'required|date',
            'veselibas_stavoklis' => 'required',
            'nopirkts' => 'required',
            'vetarsts_pk' => 'required|exists:vetarsts,PK',
        ]);
        $imagePath = $request->file('image')->store('kakis_images', 'kakis_images');
        $kakis = new Kakis();
        $kakis->image = $imagePath;
        $kakis->cipa_numurs = $request->input('cipa_numurs');
        $kakis->vards = $request->input('vards');
        $kakis->dzimsanas_dati = $request->input('dzimsanas_dati');
        $kakis->veselibas_stavoklis = $request->input('veselibas_stavoklis');
        $kakis->nopirkts = $request->input('nopirkts');
        $kakis->vetarsts_pk = $request->input('vetarsts_pk');
        $kakis->save();
        
        return redirect()->route('kakisIndex')->with('success', 'Kakis created successfully.');
    }

    public function show($id)
    {
        $kakis = Kakis::findOrFail($id);
        $image = Storage::disk('kakis_images')->url($kakis->image);

        $cipaNumurs = $kakis->cipa_numurs;
        $vards = $kakis->vards;
        $dzimsanasDati = $kakis->dzimsanas_dati;
        $veselibasStavoklis = $kakis->veselibas_stavoklis;
        $nopirkts = $kakis->nopirkts;
        $vetarstsPK = $kakis->vetarsts_PK;

        return view('kakis.show', [
            'kakis' => $kakis,
            'image' => $image,
            'cipaNumurs' => $cipaNumurs,
            'vards' => $vards,
            'dzimsanasDati' => $dzimsanasDati,
            'veselibasStavoklis' => $veselibasStavoklis,
            'nopirkts' => $nopirkts,
            'vetarstsPK' => $vetarstsPK,
        ]);
        //return view('kakis.show', ['kakis' => $kakis]);
    }

    public function edit($id)
    {
        $kakis = Kakis::findOrFail($id);
        return view('kakisEdit', ['kakis' => $kakis]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image',
            'cipa_numurs' => 'required',
            'vards' => 'required',
            'dzimsanas_dati' => 'required|date',
            'veselibas_stavoklis' => 'required',
            'nopirkts' => 'required',
            'vetarsts_pk' => 'required|exists:vetarsts,PK',
        ]);
        $kakis = Kakis::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete the previous image
            Storage::disk('kakis_images')->delete($kakis->image);
            // Store the new image file
            $imagePath = $request->file('image')->store('kakis_images', 'kakis_images');
            $kakis->image = $imagePath;
        }
        $kakis->cipa_numurs = $request->input('cipa_numurs');
        $kakis->vards = $request->input('vards');
        $kakis->dzimsanas_dati = $request->input('dzimsanas_dati');
        $kakis->veselibas_stavoklis = $request->input('veselibas_stavoklis');
        $kakis->nopirkts = $request->input('nopirkts');
        $kakis->vetarsts_pk = $request->input('vetarsts_pk');
        $kakis->save();
        return redirect()->route('kakis.index')->with('success', 'Kakis updated successfully.');
    }

    public function destroy($id)
    {
        $kakis = Kakis::findOrFail($id);
        Storage::disk('kakis_images')->delete($kakis->image);
        $kakis->delete();
        return redirect()->route('kakis.index')->with('success', 'Kakis deleted successfully.');
    }
}