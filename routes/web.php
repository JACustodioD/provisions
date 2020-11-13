<?php



Route::get('/', function () {
    return view('pvs.index'); // Raíz pagina de pvs
});

Route::get('/contacto', function () {
    return view('pvs.contact'); // Página contacto
});

Route::get('/acerca', function () {
    return view('pvs.about'); // Página acerca de 
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

