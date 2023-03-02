<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
class guestsController extends Controller
{
    function newGuest(Request $req){
        $newGuest = new guest();
        $newGuest->username = $req->username;
        $newGuest->phonen = $req->phonen;
        $newGuest->address = $req->address;
        $newGuest->number_of_guests = $req->number_of_guests;
        $newGuest->save();
        return redirect('ContentPage');
      
     
    } 
}
