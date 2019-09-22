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
    return view('pvs.index'); // Raíz pagina de pvs
});

Route::get('/invitations',function(){
	return view('pvs.invitations'); // Página principal para las invitaciones
});


Route::get('/invitations/JuliaAndPablo',function(){
	return view('templetes.bodas.juliaAndpablo'); // templete para la boda Julia and pablo
});

Route::get('/invitations/provisionsDinner',function(){
	return view('templetes.laborales.provisions'); // tempelete para fiesta laboral
});

