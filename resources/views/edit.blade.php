@extends('layout')

@section('content')

  <div class="container ">
      <h2 class="text-center text-white mt-5 mb-5">Laravel App | <span class="text-danger">Edit Post</span> </h2>
     
    
   <div class="card bg-dark shadow p-4" style="border:1px solid rgb(63, 53, 53)">
       <form action="/posts/{{ $post->id }}" method="post">
        @csrf
         @method('put')

        <div class="mb-3">
            @error('name')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
            <label for="exampleInputEmail1" class="form-label text-white" style="font-weight:bolder">Name</label>
            <input type="text" class="form-control bg-dark text-white {{ ($errors->first('name') ? " form-error" : "") }}" name=name value="{{ old('name',$post->name) }}" required >
        
        </div>
        <div class="mb-3">
            @error('description')
                <div class="alert alert-warning">{{ $message }}</div>
            @enderror
            <label for="exampleInputPassword1" class="form-label text-white" style="font-weight:bolder">Description</label>
            <textarea type="text" class="form-control bg-dark text-white {{ ($errors->first('description') ? " form-error" : "") }}" id=""  name=description  required>{{ old('description',$post->description) }}</textarea>        
        </div>
         <a href="/posts" class="btn btn-info px-3">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
   </div>

  </div>

@endsection