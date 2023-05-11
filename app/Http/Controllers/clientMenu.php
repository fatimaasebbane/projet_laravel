<?php

namespace App\Http\Controllers;

use App\Models\Dinner;
use App\Models\Lunch;
use App\Models\Repas;
use Illuminate\Http\Request;

class clientMenu extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $starters = Repas::where('type','starters')->get();
        $main = Repas::where('type','main')->get();
        $drinks = Repas::where('type','drink')->get();
        $desserts = Repas::where('type','dessert')->get();
        $lunches = Lunch::all();
        $dinners=Dinner::all();
        return view('client.menu',compact('starters','main','drinks','desserts','lunches','dinners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
