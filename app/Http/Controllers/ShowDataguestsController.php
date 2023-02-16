<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
class ShowDataguestsController extends Controller
{
    public function dispData(){
        $data = guest::all();
        return view('ContentPage',compact($data));

    }
}
