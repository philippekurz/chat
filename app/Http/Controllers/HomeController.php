<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\Console\Output\ConsoleOutput;
use Exception;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() : View
    {

        // Récupère tous les messages dans la varaible $messages
        // et les ordonne par date_heure croissante
        $messages = Message::query()
        ->orderBy('date_heure', 'asc')
        ->get();

        return view('home', compact('messages'));
    }

    public function a_propos() : View
    {
        return view('a-propos');
    }

    public function contact() : View
    {
        return view('contact');
    }

    public function messages() 
    {
        $messages = Message::query()
        ->orderBy('date_heure', 'asc')
        ->get();

        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $console = new ConsoleOutput();
        $console->writeln('Message: ' . $request->message);

        try {
            Message::create([
                'expediteur_id'=> 2,
                'message' => $request->message,
                'date_heure' => now(),
            ]);
        }
        catch (Exception $e) {
            $console->writeln('Error saving message: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to save message'], 500);
        }
        $console->writeln('Message saved successfully!');

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'message' => 'required|string|max:500',
        // ]);

        // $message = new Message();
        // $message->name = $validatedData['name'];
        // $message->email = $validatedData['email'];
        // $message->message = $validatedData['message'];
        // $message->date_heure = now();
        // $message->save();

        // return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function dashboard() : View
    {
        return view('dashboard');
    }
}
