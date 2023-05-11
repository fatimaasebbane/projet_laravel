<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $reservations=Reservation::all();
        return view('reservation.index')->with('reservations',$reservations);

 }
    public function Trashed(){
        $reservations=Reservation::onlyTrashed()->get();
        return view('reservation.Trashed')->with('reservations',$reservations);
    }
    public function create()
    {
       return view('reservation.create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
          'date'=>'required',
          'heure'=>'required',
          'gens'=>'required',
          'nom'=>'required',
          'phone'=>'required',
          'email'=>'required'
      ]);
      $reservation=Reservation::create([
        'id_user'=>Auth::id(),
        'date'=>$request->date,
        'heure'=>$request->heure,
        'gens'=>$request->gens,
        'nom'=>$request->nom,
        'phone'=>$request->phone,
        'email'=>$request->email
      ]);
      return redirect()->route('reservation.index')->with('succes', 'updated succeffly');

    }

    public function show( $id)
    {
     $reservation=Reservation::where('id',$id)->first();
     return view('reservation.show')->with('reservation',$reservation);
    }
    public function edit(Reservation $reservation)
    {
        return view('reservation.edit')->with('reservation',$reservation);

    }

    public function update(Request $request, $id)
    {
       $reservation=Reservation::find($id);
       $this->validate($request,[
        'date'=>'required',
        'heure'=>'required',
        'gens'=>'required',
        'nom'=>'required',
        'phone'=>'required',
        'email'=>'required'
    ]);
        $reservation->date=$request->date;
        $reservation->heure=$request->heure;
        $reservation->gens=$request->gens;
        $reservation->nom=$request->nom;
        $reservation->phone=$request->phone;
        $reservation->email=$request->email;
        $reservation->save();
        $reservations=Reservation::all();
        return view('reservation.index')->with('reservations',$reservations);
    }

    public function destroy($id)
    {
     $reservation=Reservation::find($id);
     $reservation->delete();
     return redirect()->back();
    }
    public function hdelete( $id)
    {
        $reservation=Reservation::withTrashed()->where('id',$id)->first();
        $reservation->forceDelete();
        return redirect()->back();
    } public function destrestoreroy( $id)
    {
        $reservation=Reservation::withTrashed()->where('id',$id)->first();
        $reservation->restore();
        return redirect()->back();
    }
}
