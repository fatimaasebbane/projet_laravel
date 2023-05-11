<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));

    }

    public function reservations($id){
        $reservations = User::find($id)->reservations;
        return view('users.reservations',compact('reservations'));
    }
    public function contacts( $id){
        $contacts = User::find($id)->contacts;
        return view('users.contacts',compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);
        return redirect()->route('user.index')->with('succes', 'added succeffly');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
       return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $users = User::all();
        return view('users.index')->with('succes', 'apdeted successflly')
            ->with('users', $users);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('succes', 'deleted');

    }
}
