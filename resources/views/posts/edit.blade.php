@extends('layouts.app')
@section('content')
     <h2 class="text-center text-secondary">update posts</h2>

    <form action="{{route('updatepost',$post->id)}}" class="form-group col-md-6 offset-3 mt-5"  method="POST">
        @csrf
        @method('PUT')
         <input type="text" class="form-control mt-2" placeholder="title" name="title"  value="{{$post->title}}">
        <input type="text" class="form-control mt-2" placeholder="description" name="description" value="{{$post->description}}">
  <select class="form-select mt-2" name="category_id">
       @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
 @endforeach
</select>
        <button class="btn btn-secondary form-control mt-2">save</button>
    </form>
@endsection

