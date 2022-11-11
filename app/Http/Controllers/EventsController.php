<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function createEvent(){
        return view('creates.create-events');
    }

    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'city' => 'required',
            'adres' => 'required',
            'date' => 'required'
        ]);

        //create a new manual in db

        $event = new events();
        $event->name = $request->name;
        $event->description = $request->desc;
        $event->city = $request->city;
        $event->adres = $request->adres;
        $event->date = $request->date;
        $event->save();


        //redirect user and send message

        return redirect('/admin/create-events')->with('Gelukt!','Event succesvol toegevoegd');

    }

}
