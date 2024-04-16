<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::view('/home', 'pages.dashboard')->name('dashboard');
Route::view('/registro_actividades', 'pages.r_actividades')->name('r_actividades');
Route::view('/registro_anuladas', 'pages.r_anuladas')->name('r_anuladas');
Route::view('/registro_roles', 'pages.r_roles')->name('r_roles');
Route::view('/registro_usuarios', 'pages.r_usuarios')->name('r_usuarios');
Route::view('/registro_sepelios', 'pages.r_sepelios')->name('r_sepelios');