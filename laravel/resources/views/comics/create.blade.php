@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container p-5">
    <div class="row">
      <form action="{{ route('comics.store') }}" method="post">
        <a class="btn btn-primary" href="{{url()->previous()}}">CANCEL</a>
        @csrf
        @method('POST')
        <div class="mb-3 mt-3">
          <label for="name" class="form-label text-uppercase fw-bold">Name comic</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="code" class="form-label text-uppercase fw-bold">Code</label>
          <input type="text" class="form-control" id="code" name="code">
        </div>
        <div class="mb-3">
            <label for="editor" class="form-label text-uppercase fw-bold">Editor</label>
            <input type="text" class="form-control" id="editor" name="editor">
        </div>
        <div class="mb-3">
          <label for="writer" class="form-label text-uppercase fw-bold">Writer</label>
          <input type="text" class="form-control" id="writer" name="writer">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label text-uppercase fw-bold">Description</label>
          <textarea class="form-control" id="editor" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label text-uppercase fw-bold">Price</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
          <label for="photo" class="form-label text-uppercase fw-bold">Photo</label>
          <input type="text" class="form-control" id="photo" name="photo">
        </div>
        <div class="mb-3">
            <label for="page" class="form-label text-uppercase fw-bold">Page</label>
            <input type="number" class="form-control" id="page" name="page">
        </div>
        <div class="mb-3">
            <label for="adult" class="form-label text-uppercase fw-bold">Adult</label>
            <input type="text" class="form-control" id="adult" name="adult">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
</div>
@endsection