<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request) {
        Mail::to('provisionssystems@gmail.com')->send(new ContactMessage());

        
    }
}
