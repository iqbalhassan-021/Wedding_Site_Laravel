<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guestsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShowDataguestsController;


Route::get('/LandingPage', function () {
    $couple = [
        'couplename' => 'Jenna & James',
    ];
    return view('LandingPage',$couple);
});

Route::get('ContentPage',[Controller::class,'ContentPage']);
Route::get('ContactPage', [Controller::class,'ContactPage']);
Route::POST('ContactPage',[guestsController::class,'newGuest']);
Route::get('showData',[Controller::class,'ContentPage']);
Route::get('Blog', [Controller::class,'Blog']);