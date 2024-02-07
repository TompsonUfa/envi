<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

//Route::group(['middleware' => 'auth:sanctum'], function (){

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

//});
