<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function createTicket(){
        $events = Events::all();
        return view('creates.create-tickets', [
            "events" => $events,
        ]);
    }

    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'event' =>'required',
            'name' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ]);

        //create a new manual in db

        $ticket = new tickets();
        $ticket->name = $request->name;
        $ticket->price = $request->price;
        $ticket->amount = $request->amount;
        $ticket->save();


        //redirect user and send message

        return redirect('/create-tickets')->with('Gelukt!','ticket succesvol toegevoegd');

    }
}
