@extends('layouts.base')

@section('content')
    <form action="{{route('event.store')}}" method="post">
        @csrf
        <input type="text" id="name" name="name" placeholder="Eventnaam">
        <input type="text" id="desc" name="desc" placeholder="Details">
        <input type="text" id="city" name="city" placeholder="Locatie">
        <input type="text" id="adres" name="adres" placeholder="Adres">
        <input type="submit" id="submit" value="Toevoegen">
    </form>
@endsection
