<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request) {
        
        /*
        $valid_data = $request->validate([
            'correo' => 'required|string|email|max:255',
            'nombre' => 'required|string|max:255',
            'empresa' => 'required|string|max:255',
            'telefono' => 'required|string|min:10|max:12',
            'mensaje' => 'required|string',
        ]);

        */
        $data = [
            'email' => $request->email,
            'name' => $request->nombre,
            'company' => $request->empresa,
            'phone' => $request->telefono,
            'message' => $request->mensaje
        ];
        
        if ($data['email'] != ''){
            Mail::to('provisionssystems@gmail.com')->send(new ContactMessage($data));
        }
        
       return  redirect('/mensaje-confirmacion');
        
    }


}
