@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
      <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="name" class="form-label">Name comic</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="code" class="form-label">Code</label>
          <input type="text" class="form-control" id="code" name="code">
        </div>
        <div class="mb-3">
            <label for="editor" class="form-label">Editor</label>
            <input type="text" class="form-control" id="editor" name="editor">
        </div>
        <div class="mb-3">
          <label for="writer" class="form-label">Writer</label>
          <input type="text" class="form-control" id="writer" name="writer">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="editor" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <input type="text" class="form-control" id="photo" name="photo">
        </div>
        <div class="mb-3">
            <label for="page" class="form-label">Page</label>
            <input type="number" class="form-control" id="page" name="page">
        </div>
        <div class="mb-3">
            <label for="adult" class="form-label">Adult</label>
            <input type="text" class="form-control" id="adult" name="adult">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
</div>
@endsection