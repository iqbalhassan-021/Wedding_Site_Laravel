<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guestsController;
use App\Http\Controllers\CoupleData;
use App\Http\Controllers\Controller;



Route::get('LandingPage',[Controller::class,'LandingPage']);
Route::get('ContentPage',[Controller::class,'ContentPage']);
Route::get('ContactPage', [Controller::class,'ContactPage']);
Route::POST('ContactPage',[guestsController::class,'newGuest']);
Route::get('showData',[Controller::class,'ContentPage']);
Route::get('Blog', [Controller::class,'Blog']);
Route::get('AdminPage', [Controller::class,'AdminPage']);
Route::POST('AddCouple',[CoupleData::class,'newCouple']);