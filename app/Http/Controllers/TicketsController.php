<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function createTicket(){
        return view('creates.create-tickets');
    }

    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        //create a new manual in db

        $ticket = new tickets();
        $ticket->name = $request->name;
        $ticket->price = $request->price;
        $ticket->save();


        //redirect user and send message

        return redirect('/create-tickets')->with('Gelukt!','ticket succesvol toegevoegd');

    }
}
