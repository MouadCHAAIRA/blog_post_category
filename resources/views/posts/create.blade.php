@extends('layouts.app')


@section('content')
    <h2 class="text-center text-secondary">add new post</h2>

    <form action="{{route('storePost')}}" class="form-group col-md-6 offset-3 mt-5"  method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control mt-2" placeholder="title" name="title">
        <input type="text" class="form-control mt-2" placeholder="description" name="description">
       <input type="file" class="form-control mt-2"  name="avatar">
   <select class="form-select mt-2" name="category_id">
       @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
 @endforeach
</select>
        <button class="btn btn-primary form-control mt-2">save</button>
    </form>

@endsection