<?php

use App\Http\Controllers\ControllerDogs;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello world';
});

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/test', function (){
    return "no";
});

// Route for dog resource
Route::resource('/dog',controller: ControllerDogs::class);

