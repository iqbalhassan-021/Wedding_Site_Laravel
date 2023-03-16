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
        $newcouple->Day  = $req->Day;
        $newcouple->Month = $req->Month;
        $newcouple->Year = $req->Year;
        $newcouple->TextAboutGroom = $req->TextAboutGroom;
        $newcouple->TextAboutBride = $req->TextAboutBride;
        $newcouple->FirstMet = $req->FirstMet;
        $newcouple->DATE = $req->DATE;
        $newcouple->Proposal = $req->Proposal;
        $newcouple->WeddingDestinatoin = $req->WeddingDestinatoin;
        $newcouple->groomeimage = $req->groomeimage;
        $newcouple->brideimage = $req->brideimage;
       
        $newcouple->save();
        return redirect('/');
      
     
    } 
}
