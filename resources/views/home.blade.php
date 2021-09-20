@extends('layouts.master')


@section('content')
<div class="container">
  <div class="row"  style="margin-top:100px">
    @foreach ($posts as $post)
    <div class="card col-md-4 mt-2">
      <img style="width: 400px;height:200px" src="{{asset('storage/'.$post->photo)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->description}}</p>
      <h4 class="card-title">{{$post->user->name}}</h4>
      {{-- <a href="{{route('')}}" class="btn btn-primary">go back</a> --}}
  </div>
</div>
    @endforeach

@endsection
