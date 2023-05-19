<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class chefControler extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $chefs=Chef::all();
        return view('chef.index',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('chef.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'image'=>'required|image',
            'bio'=>'required'
        ]);
        $image=$request->file('image');
        $newphoto=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newphoto);

        $chef=Chef::create([
            'nom' => $request->nom,
            'image' => 'upload/photos/'.$newphoto,
            'bio'=>$request->bio
          ]);
        return redirect()->route('chef.index')->with('succes', 'added succeffly');

    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {
      return view('chef.show',compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chef $chef)
    {
       return view('chef.edit',compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chef $chef)
    {
        $request->validate([
            'nom' => 'required',
            'image'=>'required|image',
            'bio'=>'required'
        ]);
        if($request->hasfile('image')){
            $image=$request->image;
            $newimage=uniqid().$image->getClientOriginalName();
            $image->move(public_path('upload/photos'),$newimage);
            $chef->image='upload/photos/'.$newimage;
       }

      $chef->nom=$request->nom;
      $chef->bio=$request->bio;
      $chef->save();
        $chefs = Chef::all();
        return view('chef.index')->with('succes', 'updeted successflly')
            ->with('chefs', $chefs);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
        return redirect()->route('chef.index')->with('succes', 'deleted');

    }
}
