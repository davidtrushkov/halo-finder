<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {


    public function index () {

        $messages = Chat::orderBy('created_at', 'desc')->get();

        return view('layouts.index', compact('messages'));
    }

}
