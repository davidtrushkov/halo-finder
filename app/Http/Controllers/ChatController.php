<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller {

    public function sendMessage (Request $request) {

        $chat = new Chat($request->all());
        $chat['user_id'] = $this->user->id;
        $chat->save();

        event(new MessageSent('chat'));

        return redirect()->back();
    }

}