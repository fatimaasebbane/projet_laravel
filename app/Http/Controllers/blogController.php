<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
     public function index()
     {
         $blogs = Blog::all();
         return view('blog.index', compact('blogs'));
     }

     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
        $categories=Category::all();
         return view('blog.create')->with('categories',$categories);
     }

     public function store(Request $request)
     {
        $this->validate($request,[
            'image'=>'required|image',
            'titre'=>'required',
            'date_creation'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);

        $blog=Blog::create([
          'id_user'=>Auth::id(),
          'titre'=>$request->titre,
          'date_creation'=>$request->date_creation,
          'description'=>$request->description,
          'id_category'=>$request->category,
          'image'=>'upload/photos/'.$newimage
        ]);

         return redirect()->route('blog.index')->with('succes', 'added succeffly');
     }

public function destroy(Blog $blog){
    $blog->delete();
    return redirect()->route('blog.index');
}
}
