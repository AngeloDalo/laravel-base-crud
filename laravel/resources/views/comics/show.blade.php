@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
             <h1>{{ $comic->name }}</h1>
             <span>{{ $comic->editor }}</span>
             <span>{{ $comic->writer }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col">
          <img class="fluid-img" src=" {{$comic->photo }}" alt="{{$comic->name}}">
        </div>
        <div class="col">
          <div>{{ $comic->description }}</div>
          <div><h2>{{  $comic->price }} €</h2></div>
        </div>
    </div>
</div>
@endsection