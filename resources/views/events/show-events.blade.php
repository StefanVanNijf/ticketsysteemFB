@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
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
            </tr>
        @endforeach
    </table>
    {{ $events->links() }}
</div>

@endsection
