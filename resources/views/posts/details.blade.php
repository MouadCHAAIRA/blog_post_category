@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="col-md-8 offset-2">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">category</th>
              </tr>
            </thead>
            <tbody>
               
                <tr>
                  <th scope="row">{{$Post->id}}</th>
                  <td>{{$Post->title}}</td>
                  <td>{{$Post->description}}</td>
                  <td>{{$Post->category->name}}</td>
                </tr>
                
                
            </tbody>
          </table>
        </div>
    </div>
@endsection