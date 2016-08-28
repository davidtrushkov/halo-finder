<?php

namespace App\Events;

use App\Chat;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageSent extends Event implements ShouldBroadcast {


    use SerializesModels;

    public $chat;


    /**
     * MessageSent constructor.
     *
     * @param $chat
     */
    public function __construct($chat) {
        //
        $this->$chat = $chat;
    }


    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn() {
        return ['chat_channel'];
    }


    public function broadcastWith() {
        $chat =  Chat::orderBy('created_at', 'desc')->get();
        //dd($s);
        return [$chat];
    }
}