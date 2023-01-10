@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between">
            <div class="p-2">
                <h2>Events aanpassen</h2>
            </div>
            <div class="p-2">
                <a class="btn btn-primary" href="{{route('event.index')}}">Terug</a>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Je input is niet helemaal correct.<br><br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <form action="{{route('event.update', $event->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Eventnaam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$event->name}}">
            <label for="desc">Details</label>
            <input type="text" class="form-control" id="desc" name="desc" value="{{$event->description}}">
            <label for="name">Prijs</label>
            <input type="number" step=".01" min="0" class="form-control" id="price" name="price" value="{{$event->price}}">
            <label for="city">Stad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$event->city}}">
            <label for="adres">Adres</label>
            <input type="text" class="form-control" id="adres" name="adres" value="{{$event->adres}}">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount" id="amount" value="{{$event->amount_of_tickets}}">
            <label for="dateStart">Startdatum</label>
            <input type="date" class="form-control" id="dateStart" name="dateStart" value="{{$event->dateStart}}">
            <label for="dateEnd">Einddatum</label>
            <input type="date" class="form-control" id="dateEnd" name="dateEnd" value="{{$event->dateEnd}}">
            <input type="submit" class="btn btn-dark" value="Aanpassen">
        </form>
    </div>
</div>

@endsection
