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
//        //validate input
//        $request->validate([
//            'brands' => 'required',
//            'manual_name' => 'required',
//            'link' => 'required'
//        ]);
//
//        //create a new manual in db
//
//        $manualName = new Event();
//        $manualName->name = $request->manual_name;
//        $manualName->brand_id = $request->brands;
//        $manualName->save();
//
//
//        //redirect user and send message
//
//        return redirect('/adminpage')->with('Gelukt!','Manual succesvol toegevoegd');

    }
}
