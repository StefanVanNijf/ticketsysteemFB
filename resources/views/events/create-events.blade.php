@extends('layouts.base')
@section('content')
    <div class="container">
        @if($message = Session::get('succes'))
            <div class="alert alert-succes">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="form-group">
            <form action="{{route('event.store')}}" method="post">
                @csrf
                <label for="name">Eventnaam</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Eventnaam hier">
                <label for="desc">Details</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Event info hier"></textarea>
                <label for="name">Prijs</label>
                <input type="number" step=".01" min="0" value="0" class="form-control" id="price" name="price" placeholder="Prijs hier">
                <label for="city">Stad</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Stad hier">
                <label for="adres">Adres</label>
                <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres gegevens hier">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="Aantal beschikbare tickets">
                <label for="dateStart">Startdatum</label>
                <input type="date" class="form-control" id="dateStart" name="dateStart">
                <label for="dateEnd">Einddatum</label>
                <input type="date" class="form-control" id="dateEnd" name="dateEnd">
                <input type="submit" class="btn btn-dark" value="Toevoegen">
            </form>
        </div>
    </div>
@endsection
