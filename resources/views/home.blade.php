@extends('layout')

@section('content')

  <div class="container ">
      <h2 class="text-center text-white mt-5 mb-5">Laravel App</h2>
     @foreach ($data as $post )
          
     
        <div class="card bg-dark shadow" style="border:1px solid rgb(63, 53, 53)">
        <h5 class="card-header text-white">{{ $post->name }}</h5>
            <div class="card-body">
                <h6 class="card-title text-white h6">{{ $post->created_at }}</h6>
                <p class="card-text text-white">{{ $post->description }}</p>
                <a href="#" class="btn btn-primary px-3">View</a>
            </div>
        </div><br>
     @endforeach
  </div>

@endsection