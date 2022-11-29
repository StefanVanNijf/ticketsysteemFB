@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Evenementen lijst</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('create-events')}}">Nieuw event toevoegen</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Details</th>
                <th>Actions</th>
            </tr>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>
                        <form action="{{ route('event.destroy', $event->id) }}" method="post">
                            <a  class="btn btn-info" href="{{route('event.show', $event->id)}}">Show</a>
                            <a  class="btn btn-primary" href="{{route('event.edit', $event->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $events->links() }}
    </div>

@endsection
