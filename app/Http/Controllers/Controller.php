<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\guest;
use App\Http\Controller\guestsController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function ContentPage(){
        $newCoupleData = array(
            'list' => DB::table('coupledetails')->get()  
          );
        return view('ContentPage',$newCoupleData);
    }
    public function ContactPage(){
        $newCoupleData = array(
            'list' => DB::table('coupledetails')->get()  
          );
  
        return view('ContactPage',$newCoupleData);
    }
    public function Blog(){
        $newCoupleData = array(
            'list' => DB::table('coupledetails')->get()  
          );
        return view('Blog',$newCoupleData);
    }
    public function LandingPage(){
        $newCoupleData = array(
            'list' => DB::table('coupledetails')->get()  
          );
        return view('LandingPage',$newCoupleData);
    }

    public function AdminPage(){
        return view('adminPage');
    }
}
