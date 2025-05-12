<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('welcome');


        // Récupère tous les messages dans la varaible $messages
        // et les ordonne par date_heure croissante
        $messages = Message::query()
        ->orderBy('date_heure', 'asc')
        ->get();
        //return view('home');
        return view('home', compact('messages'));
    }
}
