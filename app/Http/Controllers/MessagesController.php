<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;	


class MessagesController extends Controller
{
    public function store(Request $request){
        $message = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:5'
        ],
        [
            'name.required' => 'Introduzca el nombre.',
            'email.required' => 'Introduzca el correo.',
            'email.email' => 'Introduzca un correo valido.',
            'subject.required' => 'Introduzca un asunto.',
            'content.required' =>'Favor de introducir el contenido.',
            'content.min' => 'Se necesita introducir mínimo 5 carácteres.'
        ]);
        Mail::to('NetmexContacto@oficial.edu.mx')->queue(new MessageReceived($message));
        return back()->with('status', 'Recibimos tu mensaje, te responderemos en breve.');

    
    }
	
}
