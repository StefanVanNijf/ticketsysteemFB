<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function createEvent(){
        return view('events.create-events');
    }

    public function viewEvents(){
        $events = Events::latest()->paginate(5);
        return view('events.show-events', compact('events'))->with(request()->input('page'));
    }

    public function index(){
        $events = Events::latest()->paginate(5);
        return view('events.index', compact('events'))->with(request()->input('page'));
    }

    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'city' => 'required',
            'adres' => 'required',
            'amount' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required'
        ]);

        //create a new manual in db

        $event = new Events();
        $event->name = $request->name;
        $event->description = $request->desc;
        $event->price = $request->price;
        $event->city = $request->city;
        $event->adres = $request->adres;
        $event->amount_of_tickets = $request->amount;
        $event->date_start = $request->dateStart;
        $event->date_end = $request->dateEnd;
        $event->save();


        //redirect user and send message

        return redirect('/admin/create-events')->with('Gelukt!','Event succesvol toegevoegd');

    }

    public function show(Events $event){
        return view('events.show', compact('event'));
    }

    public function edit(Events $event){
        return view('events.edit', compact('event'));
    }
    public function update(Request $request, Events $event){
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'city' => 'required',
            'adres' => 'required',
            'amount' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required'
        ]);

        $event->update($request->all());

        return redirect('/admin/index')->with('Gelukt!','Event succesvol aangepast!');
    }

    public function destroy(){
        //
    }

}
