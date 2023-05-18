<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
class UserController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index(Request $request)
    {
        // $users = User::all();
        $query=User::query();
        $date=$request->date_filter;
        switch($date){
            case 'today':
                $query->whereDate('created_at',Carbon::today());
                break;

            case 'hier':
                 $query->whereDate('created_at',Carbon::yesterday());
                 break;
            case 'ce_semaine':
                 $query->whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
                 break;
            case 'semaine_dernier':
                $query->whereBetween('created_at',[Carbon::now()->subWeek(),Carbon::now()]);
                break;
            case 'ce_mois':
                 $query->whereMonth('created_at',Carbon::now()->month);
                break;
            case 'mois_dernier':
                $query->whereMonth('created_at',Carbon::now()->subMonth()->month);
                break;
            case 'cette_annee':
                    $query->whereYear('created_at',Carbon::now()->year);
                   break;
            case 'annee_dernier':
                    $query->whereYear('created_at',Carbon::now()->subYear()->year);
                    break;

        }
        $users=$query->get();
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
    public function profile( $id){
        $profile = User::find($id)->profile;
        return view('users.profile',compact('profile'));
    }

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
