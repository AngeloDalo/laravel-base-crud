@extends('layouts.base')

@section('documentTitle')
    Modifica del Fumetto: {{ $comic->name }}
@endsection

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h2 class="text-uppercase">Modifica del Fumetto: {{ $comic->name }}</h2>
                <a class="btn btn-primary" href="{{route('comics.index')}}">HOME</a>
                <a class="btn btn-primary" href="{{route('comics.show', $comic)}}">VIEW</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3 mt-5">
                        <label for="name" class="form-label text-uppercase fw-bold">Name comic</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $comic->name }}">
                      </div>
                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                        <label for="code" class="form-label text-uppercase fw-bold">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{ $comic->code }}">
                      </div>
                      @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                          <label for="editor" class="form-label text-uppercase fw-bold">Editor</label>
                          <input type="text" class="form-control" id="editor" name="editor" value="{{ $comic->editor }}">
                      </div>
                      @error('editor')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                        <label for="writer" class="form-label text-uppercase fw-bold">Writer</label>
                        <input type="text" class="form-control" id="writer" name="writer" value="{{ $comic->writer }}">
                      </div>
                      @error('alert')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                        <label for="description" class="form-label text-uppercase fw-bold">Description</label>
                        <input type="text" class="form-control" id="editor" name="editor" value="{{ $comic->description }}">
                      </div>
                      @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                        <label for="price" class="form-label text-uppercase fw-bold">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                      </div>
                      @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                        <label for="photo" class="form-label text-uppercase fw-bold">Photo</label>
                        <input type="text" class="form-control" id="photo" name="photo" value="{{ $comic->photo }}">
                      </div>
                      @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3"> 
                          <label for="page" class="form-label text-uppercase fw-bold">Page</label>
                          <input type="number" class="form-control" id="page" name="page" value="{{ $comic->page }}">
                      </div>
                      @error('page')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                      <div class="mb-3">
                          <label for="adult" class="form-label text-uppercase fw-bold">Adult</label>
                          <input type="text" class="form-control" id="adult" name="adult" value="{{ $comic->adult }}">
                      </div>
                      @error('adult')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                    <input type="submit" class="btn btn-primary" value="Salva Modifica">
                </form>
            </div>
        </div>
    </div>
@endsection