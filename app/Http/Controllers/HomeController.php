<?php

namespace App\Http\Controllers;

use view;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\storePostRequest;

class HomeController extends Controller
{
    /**  
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Post::all();
        $data = Post::orderBy('id','desc')->get();
        return view('home', compact('data'));

    
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(storePostRequest $request)
    {

    //    $post = new Post();
    //    $post->name = $request->name;
    //    $post->description = $request->description;
    //    $post->save();

        Post::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

       return redirect('/posts');

    }

  
  
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view ('show', compact('post'));
    }

            /**
             * Show the form for editing the specified resource.
             */
            // public function edit(Post $id)
            // {
             //     $post = Post::findOrFail($id);
            //      return view ('edit', compact('post'));
            // }



    //route model binding
      public function edit(Post $post)
    {
          
         return view ('edit', compact('post'));
    }

            /**
             * Update the specified resource in storage.
             */
            // public function update(Request $request, string $id)
            // {
            //      $post = Post::findOrFail($id);

            //     $post->name = $request->name;
            //     $post->description = $request->description;

            //     $post->save();

            //      return redirect('/posts');
            // }



        public function update(storePostRequest $request, Post $post)
    {


        // $post->name = $request->name;
        // $post->description = $request->description;
        // $post->save();

         $post->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

         return redirect('/posts');
    }
    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //    Post::findOrFail($id)->delete();
    //    return redirect('/posts');
    // }



     public function destroy(Post $post)
    {
       $post->delete();
       return redirect('/posts');
    }
}
