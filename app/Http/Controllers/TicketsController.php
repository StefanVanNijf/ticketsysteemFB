<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function createTicket(){
        return view('create-ticket');
    }
}