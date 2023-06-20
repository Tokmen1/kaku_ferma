<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bariba;

class BaribaController extends Controller
{
    public function index()
    {
        $baribas = Bariba::all();
        return view('baribas.index', compact('baribas'));
    }

    public function create()
    {
        return view('baribas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nosaukums' => 'required',
            'Razotajs' => 'required',
            'Ir_biologisks' => 'boolean',
        ]);

        Bariba::create($request->all());

        return redirect()->route('baribas.index')
            ->with('success', 'Bariba created successfully.');
    }

    public function show(Bariba $bariba)
    {
        return view('baribas.show', compact('bariba'));
    }

    public function edit(Bariba $bariba)
    {
        return view('baribas.edit', compact('bariba'));
    }

    public function update(Request $request, Bariba $bariba)
    {
        $request->validate([
            'Nosaukums' => 'required',
            'Razotajs' => 'required',
            'Ir_biologisks' => 'boolean',
        ]);

        $bariba->update($request->all());

        return redirect()->route('baribas.index')
            ->with('success', 'Bariba updated successfully.');
    }

    public function destroy(Bariba $bariba)
    {
        $bariba->delete();

        return redirect()->route('baribas.index')
            ->with('success', 'Bariba deleted successfully.');
    }
}
