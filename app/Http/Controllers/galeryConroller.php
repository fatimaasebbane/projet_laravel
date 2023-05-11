<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class galeryConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'photo' => 'required|image'
        ]);
        $photo=$request->file('photo');
        $newphoto=uniqid().$photo->getClientOriginalName();
        $photo->move(public_path('upload/photos'),$newphoto);

        $photo = Photo::create([
            'type' => $request->type,
            'photo' => 'upload/photos/'.$newphoto
        ]);
        return redirect()->route('photos.index')->with('succes', 'added succeffly');
    }

    public function show(Photo $photo)
    {
        return view('photos.show',compact('photo'));
    }

    public function edit(Photo $photo)
    {
       return view('photos.edit',compact('photo'));
    }
    public function update(Request $request, Photo $photo)
    {

        $request->validate([
            'type' => 'required',
        ]);
        if($request->hasFile('photo'))
        {
        $image=$request->file('photo');
        $newphoto=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newphoto);
        $photo->photo ='upload/photos/'.$newphoto;
        }
       $photo->type=$request->type;
       $photo->save();
    return redirect()->route('photos.index')->with('succes', 'updated succeffly');

    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index')->with('succes', 'deleted');

    }
}
