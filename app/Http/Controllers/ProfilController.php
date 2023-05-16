<?php

namespace App\Http\Controllers;

use App\Models\Lunch;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
   public function index(){
    $profile=Profil::where('id_user',Auth::id())->first();
    // if($image=$profile->image){
    // $newimage=uniqid().$image->getClientOriginalName();
    // $image->move(public_path('upload/photos'),$newimage);
    // $profile->image='upload/photos/'.$newimage;}
    return view('profile.index',compact('profile'));
   }
}
