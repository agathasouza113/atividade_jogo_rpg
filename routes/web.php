<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tela_inicial_jogo');
});

Route::get('/combate', function () {
    return view('combate');
});

//Route::get('/', function () {
    //return view('welcome');
//});
