@extends('layouts.base')

@section('content')
    <form action="{{route('ticket.store')}}" method="post">
        <input type="text" id="name" name="name" placeholder="Ticketnaam">
        <input type="number" min="0" id="price" name="price" placeholder="Prijs">
        <input type="submit" id="submit" value="Toevoegen">
    </form>
@endsection
