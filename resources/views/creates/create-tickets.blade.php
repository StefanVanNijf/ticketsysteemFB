@extends('layouts.base')

@section('content')
        <div class="form1">
            <table>
                <form action="{{route('ticket.store')}}" method="post">
                    <td><tr><select name="events" id="events">
                        @foreach($events as $event)
                            <option value="{{$event->id}}">{{ $event->name}}</option>
                        @endforeach
                    </select></tr></td>
                    <tr><td><input type="text" id="name" name="name" placeholder="Ticketnaam"></tr></td>
                    <tr><td><input type="number" min="0" id="price" name="price" placeholder="Prijs"></tr><td>
                    <tr><td><input type="number" name="amount" id="amount" placeholder="Hoeveel"></tr></td>
                    <tr><td><input type="submit" id="submit" value="Toevoegen"></tr></td>
                </form>
            </table>
        </div>
@endsection
