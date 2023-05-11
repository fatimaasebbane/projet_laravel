<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $contact=Contact::create([
            'id_user'=>Auth::id(),
            'name' => $request->name,
            'email' =>$request->email,
            'phone' => $request->phone,
            'message' => $request->message,
          ]);
        return redirect()->route('contact.index')->with('succes', 'added succeffly');
    }

    public function show(Contact $contact)
    {
        return view('contact.show',compact('contact'));
    }

    public function edit(Contact $contact)
    {
       return view('contact.edit',compact('contact'));
    }

    public function update(Request $request, contact $contact)
    {
        $contact->update($request->all());
        $contacts = Contact::all();
        return view('contact.index')->with('succes', 'updeted successflly')
            ->with('contacts', $contacts);
    }

    public function destroy(Contact $Contact)
    {
        $Contact->delete();
        return redirect()->route('contact.index')->with('succes', 'deleted');

    }
}
