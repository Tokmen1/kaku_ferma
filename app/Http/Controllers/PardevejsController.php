<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pardevejs;

class PardevejsController extends Controller
{
    public function index()
    {
        $pardevejs = Pardevejs::all();
        return view('pardevejs.index', compact('pardevejs'));
    }

    public function create()
    {
        return view('pardevejs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'PK' => 'required|unique:pardevejs',
            'Vards' => 'required',
            'Uzvards' => 'required',
            'Adrese' => 'required',
            'Epasts' => 'required',
        ]);

        Pardevejs::create($validatedData);

        return redirect()->route('pardevejs.index')->with('success', 'Pardevējs has been created successfully.');
    }

    public function show(Pardevejs $pardevejs)
    {
        return view('pardevejs.show', compact('pardevejs'));
    }

    public function edit(Pardevejs $pardevejs)
    {
        return view('pardevejs.edit', compact('pardevejs'));
    }

    public function update(Request $request, Pardevejs $pardevejs)
    {
        $validatedData = $request->validate([
            'PK' => 'required|unique:pardevejs,PK,' . $pardevejs->id,
            'Vards' => 'required',
            'Uzvards' => 'required',
            'Adrese' => 'required',
            'Epasts' => 'required',
        ]);

        $pardevejs->update($validatedData);

        return redirect()->route('pardevejs.index')->with('success', 'Pardevējs has been updated successfully.');
    }

    public function destroy(Pardevejs $pardevejs)
    {
        $pardevejs->delete();

        return redirect()->route('pardevejs.index')->with('success', 'Pardevējs has been deleted successfully.');
    }
}
