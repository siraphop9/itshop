<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/shop', [WebController::class, 'myshop'])->name("web.myshop");    