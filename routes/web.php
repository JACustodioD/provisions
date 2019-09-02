<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('PVS.index');
});

Route::get('/invitations/JuliaAndPablo',function(){
	return view('Bodas.juliaPablo.index');
});

Route::get('/invitations',function(){
	return view('welcome');
});
