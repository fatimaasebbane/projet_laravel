<?php

namespace App\Http\Controllers;

use App\Models\Repas;
use Illuminate\Http\Request;

class RepasConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $repas = Repas::all();
        return view('repas.index', compact('repas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);
        $product = Repas::create($request->all());
        return redirect()->route('repas.index')->with('succes', 'added succeffly');
    }

    public function show(Repas $repa)
    {
        return view('repas.show',compact('repa'));
    }

    public function edit(Repas $repa)
    {
       return view('repas.edit',compact('repa'));
    }

    public function update(Request $request, Repas $repa)
    {
        $repa->update($request->all());
        $repas = Repas::latest()->paginate(4);
        return view('repas.index')->with('succes', 'apdeted successflly')
            ->with('repas', $repas);
    }

    public function destroy(Repas $repa)
    {
        $repa->delete();
        return redirect()->route('repas.index')->with('succes', 'deleted');

    }
}
