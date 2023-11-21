@extends('layout')

@section('content')

  <div class="container ">
      <h2 class="text-center text-white mt-5 mb-5">Laravel App | <span class="text-danger">Detail Page</span> </h2>
     

        <div class="card bg-dark shadow" style="border:1px solid rgb(63, 53, 53)">
          <h5 class="card-header text-white p-4">{{ $post->name }}</h5>
            <div class="card-body">
                <h6 class="card-title text-info h6">{{ $post->created_at }}</h6>
                <p class="card-text text-white">{{ $post->description }}</p>
                <p class="card-text text-white" style="font-style:italic">Category : <span class="text-primary">{{ $post->categories->name }}</span></p>
            </div>
        </div><br>
         <div class="mb-2">
          
            <a href="/posts" class="btn btn-info  px-3">Back</a>
           
        </div>
  </div>

@endsection