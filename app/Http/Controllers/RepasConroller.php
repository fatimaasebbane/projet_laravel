<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Repas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepasConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        $repas = Repas::all();
        return view('repas.index', compact('repas','profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('repas.create',compact('profile'));
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
        $profile=Profil::where('id_user',Auth::id())->first();
        return redirect()->route('repas.index')->with('succes', 'added succeffly')->with('profile',$profile);
    }

    public function show(Repas $repa)
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('repas.show',compact('repa','profile'));
    }

    public function edit(Repas $repa)
    {
        $profile=Profil::where('id_user',Auth::id())->first();
       return view('repas.edit',compact('repa','profile'));
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
    $profile=Profil::where('id_user',Auth::id())->first();
    return redirect()->route('repas.index')->with('succes', 'updated succeffly')->with('profile',$profile);


    }

    public function destroy(Repas $repa)
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        $repa->delete();
        return redirect()->route('repas.index')->with('succes', 'deleted')->with('profile',$profile);

    }
}
