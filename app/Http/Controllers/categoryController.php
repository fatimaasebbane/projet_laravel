<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $category=Category::create([
            'name' => $request->name
          ]);
        return redirect()->route('category.index')->with('succes', 'added succeffly');
    }

    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }

    public function edit(Category $category)
    {
       return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        $categories = Category::all();
        return view('category.index')->with('succes', 'updeted successflly')
            ->with('categories', $categories);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('succes', 'deleted');

    }
}
