<?php

namespace App\Http\Controllers;

use App\Models\Message;

class ControllerMessage extends Controller
{
    public function index(){
        $message = Message::find(1);
        dd($message);
    }
}
