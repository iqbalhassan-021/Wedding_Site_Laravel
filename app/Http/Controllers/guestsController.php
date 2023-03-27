<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
class guestsController extends Controller
{
    function newGuest(Request $req){
        $newGuest = new guest();
        $newGuest->fname = $req->fname;
        $newGuest->lname = $req->lname;
        $newGuest->phonen = $req->phonen;
        $newGuest->address = $req->address;
        $newGuest->email = $req->email;
        $newGuest->number_of_guests = $req->number_of_guests;
        $newGuest->save();
        return redirect('/');
      
     
    } 
}
