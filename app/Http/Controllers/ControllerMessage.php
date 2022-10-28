<?php

namespace App\Http\Controllers;

use App\Models\Message;

class ControllerMessage extends Controller
{
    public function index(){
        /*$message = Message::all();
        dd($message);*/
        $messages = Message::all();
        return view('welcome', ['messages'=>$messages]);
    }
    public function create(){

        $messages = [
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message'),
        ];
        Message::create($messages);
        return redirect('/messages');
    }
}
