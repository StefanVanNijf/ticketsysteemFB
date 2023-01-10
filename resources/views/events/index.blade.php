@extends('layouts.base')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="p-2">
                <h2>Evenementen lijst</h2>
            </div>
            <div class="p-2">
                <a class="btn btn-success" href="{{route('create-events')}}">Nieuw event toevoegen</a>
            </div>
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
