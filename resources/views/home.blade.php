@extends('layout')

@section('content')

  <div class="container ">
      <h2 class="text-center text-white mt-5 mb-5">Laravel App | <span class="text-danger">Home Page</span> </h2>
      <div class="mb-3">
        <a href="/posts/create" class="btn btn-info">+ New Post</a>
      </div>
        
     @foreach ($data as $post )
          
     
        <div class="card bg-dark shadow" style="border:1px solid rgb(63, 53, 53)">
        <h5 class="card-header text-white">{{ $post->name }}</h5>
            <div class="card-body">
                <h6 class="card-title text-info h6">{{ $post->created_at }}</h6>
                <p class="card-text text-white">{{ $post->description }}</p>
                <form action="posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-end">Delete</button>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning float-end me-2 px-3">Edit</a> 
                </form>
                <a href="posts/{{ $post->id }}" class="btn btn-primary px-3">View</a>
            </div>
        </div><br>
     @endforeach

       
  </div>

@endsection