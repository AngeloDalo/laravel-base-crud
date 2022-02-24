@extends('layouts.base')

@section('documentTitle')
    Modifica del Fumetto: {{ $comic->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Modifica del Fumetto: {{ $comic->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name comic</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $comic->name }}">
                      </div>
                      <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{ $comic->code }}">
                      </div>
                      <div class="mb-3">
                          <label for="editor" class="form-label">Editor</label>
                          <input type="text" class="form-control" id="editor" name="editor" value="{{ $comic->editor }}">
                      </div>
                      <div class="mb-3">
                        <label for="writer" class="form-label">Writer</label>
                        <input type="text" class="form-control" id="writer" name="writer" value="{{ $comic->writer }}">
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="editor" name="editor" value="{{ $comic->description }}">
                      </div>
                      <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="text" class="form-control" id="photo" name="photo" value="{{ $comic->photo }}">
                      </div>
                      <div class="mb-3">
                          <label for="page" class="form-label">Page</label>
                          <input type="number" class="form-control" id="page" name="page" value="{{ $comic->page }}">
                      </div>
                      <div class="mb-3">
                          <label for="adult" class="form-label">Adult</label>
                          <input type="text" class="form-control" id="adult" name="adult" value="{{ $comic->adult }}">
                      </div>

                    <input type="submit" class="btn btn-primary" value="Salva Modifica">
                </form>
            </div>
        </div>
    </div>
@endsection