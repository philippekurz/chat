<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() : View
    {
        // This is the home page of the application
        $messages = Message::query()
        ->orderBy('date_heure', 'asc')
        ->get();
        //return view('home');
        return view('home', compact('messages'));
    }
}
