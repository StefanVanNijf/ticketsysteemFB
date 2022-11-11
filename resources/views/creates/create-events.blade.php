@extends('layouts.base')
@section('content')
    <div class="form1"><table>
        <form action="{{route('event.store')}}" method="post">
            @csrf
            <tr><td><input type="text" id="name" name="name" placeholder="Eventnaam"></td></tr>
            <tr><td><input type="text" id="desc" name="desc" placeholder="Details"></td></tr>
            <tr><td><input type="text" id="city" name="city" placeholder="Locatie"></td></tr>
            <tr><td><input type="text" id="adres" name="adres" placeholder="Adres"></td></tr>
            <tr><td><input type="date" id="date" name="date"></tr>
            <tr><td><input type="submit" id="submit" value="Toevoegen"></td></tr>
        </form>
        </table></div>
@endsection
