@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 class="h1">Admin - All Comics</h1>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new keyboard</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
             <table class="table table-primary">
                <thead>
                    <tr class="table-primary">
                        <th>Name</th>
                        <th>Code</th>
                        <th>Editor</th>
                        <th>Writer</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->name }}</td>
                        <td>{{ $comic->Code }}</td>
                        <td>{{ $comic->editor }}</td>
                        <td>{{ $comic->writer }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{ $comics->links() }}
        </div>
    </div>
</div>
@endsection