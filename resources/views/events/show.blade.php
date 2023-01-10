@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between">
            <div class="p-2">
                <h2>Details</h2>
            </div>
            <div class="p-2">
                <a class="btn btn-primary" href="{{route('event.index')}}">Terug</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="form-group">
                <strong>{{$event->name}}</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="form-group">
                <strong>Info: </strong>
                {{$event->description}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="form-group">
                <strong>Prijs: </strong>
                {{$event->price}} euro
            </div>
        </div>
    </div>
</div>


@endsection
