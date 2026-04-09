<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/home', function (){
    return view('home');
});

Route::get('/', function (){
    return view('home');
});