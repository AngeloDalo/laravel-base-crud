@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row row-title-index">
        <h1 class="h1 text-uppercase">Admin - All Comics</h1>
    </div>
    <div class="row mb-4">
        <div class="col">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new Comics</a>
        </div>
    </div>
    <!--message delate-->
    <div class="row">
        <div class="col">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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
                        <th>View</th>
                        <th>Update</th>
                        <th>Delate</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->name }}</td>
                        <td>{{ $comic->code }}</td>
                        <td>{{ $comic->editor }}</td>
                        <td>{{ $comic->writer }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                        <td><a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Update</a></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
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