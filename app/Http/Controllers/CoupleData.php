<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoupleDetal;

class CoupleData extends Controller
{
    function newCouple(Request $req){
        $newcouple = new CoupleDetal();
        $newcouple->CoupleName = $req->CoupleName;
        $newcouple->GroomName = $req->GroomName;
        $newcouple->BrideName  = $req->BrideName;
    
        $newcouple->TextAboutGroom = $req->TextAboutGroom;
        $newcouple->TextAboutBride = $req->TextAboutBride;
        $newcouple->FirstMet = $req->FirstMet;
        $newcouple->DATE = $req->DATE;
        $newcouple->Proposal = $req->Proposal;
        $newcouple->WeddingDestinatoin = $req->WeddingDestinatoin;

       
        $newcouple->save();
        return redirect('/');
      
     
    } 
}
