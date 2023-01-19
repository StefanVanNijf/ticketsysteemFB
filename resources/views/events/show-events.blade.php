@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <div class="float-right">
            <h2>Evenementen</h2>
        </div>
    </div>
</div>



<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Details</th>
        </tr>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->name }}</td>
                <td>{{ $event->description }}</td>
                <td><a  class="btn btn-info" href="{{route('event.show', $event->id)}}">Show</a></td>
            </tr>
        @endforeach
    </table>
    {{ $events->links() }}
</div>

@endsection
