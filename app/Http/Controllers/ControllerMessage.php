<?php

namespace App\Http\Controllers;

use App\Models\Message;

use Illuminate\Support\Facades\Validator;

class ControllerMessage extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('welcome', ['messages'=>$messages]);
    }
    public function create(){

        $validator = Validator::make(request()->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        if($validator->fails()){
            redirect('/messages')->withErrors($validator);
        }

        $messages = [
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message'),
        ];

        Message::create($messages);
        return redirect('/messages');
    }
}
