@extends('layout')

@section('content')

  <div class="container ">
      <h2 class="text-center text-white mt-5 mb-5">Laravel App | <span class="text-danger">Create Page</span> </h2>
     
    <div class="card bg-dark shadow p-4" style="border:1px solid rgb(63, 53, 53)">
      <form action="/posts" method="post" class="bg-dark">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
        
       
        <div class="mb-3">
          @error('name')
              <div class="alert alert-warning">{{ $message }}</div>
          @enderror
            <label for="exampleInputEmail1" class="form-label text-white" style="font-weight:bolder">Name</label>
            <input type="text" class="form-control bg-dark text-white {{ ($errors->first('name') ? " form-error" : "") }}" name="name"  value="{{ old('name') }}" required>
        
        </div>
        <div class="mb-3">
           @error('description')
              <div class="alert alert-warning">{{ $message }}</div>
          @enderror
            <label for="exampleInputPassword1" class="form-label text-white" style="font-weight:bolder">Description</label>
            <textarea type="text" class="form-control bg-dark text-white {{ ($errors->first('description') ? " form-error" : "") }}" id=""  name="description" required >{{ old('description') }}</textarea>        
        </div>

        <div class="mb-3">
           @error('category_id')
              <div class="alert alert-warning">{{ $message }}</div>
          @enderror
            <select name="category_id" id="" class="form-control bg-dark text-white">
              <option value="">Select Category</option>
              @foreach ($categories as $cat)

              <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                
              @endforeach
            </select>
        </div>
         
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/posts" class="btn btn-info px-3">Back</a>
     </form>
    </div>
  </div>

@endsection