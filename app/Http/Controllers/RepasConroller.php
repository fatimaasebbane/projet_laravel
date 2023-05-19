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
            'description' => 'required',
            'image'=>'required|image'

        ]);
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);

        $repas = Repas::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'type'=>$request->type,
            'image' => 'upload/photos/'.$newimage
        ]);

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
         $request->validate([
        'nom' => 'required',
        'prix' => 'required',
        'type' => 'required',
        'description' => 'required',
        'image'=>'required|image'

    ]);

        if($request->hasfile('image')){
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);
        $repa->image='upload/photos/'.$newimage;
   }
   $repa->nom=$request->nom;
   $repa->type=$request->type;
   $repa->description=$request->description;
   $repa->prix=$request->prix;
    $repa->save();
    return redirect()->route('repas.index')->with('succes', 'updated succeffly');


    }

    public function destroy(Repas $repa)
    {
        $repa->delete();
        return redirect()->route('repas.index')->with('succes', 'deleted');

    }
}
