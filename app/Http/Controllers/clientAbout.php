<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class clientAbout extends Controller
{
    public function index()
    {
        $chefs=Chef::all();
        return view('client.about',compact('chefs'));
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

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
