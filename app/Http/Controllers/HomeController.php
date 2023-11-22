<?php

namespace App\Http\Controllers;

use auth;

use view;
use App\Models\Post;
use App\Models\Category;
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
        $data = Post::where('user_id',auth()->id())->orderBy('id','desc')->get();
        return view('home', compact('data'));

    
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(storePostRequest $request)
    {
        
        $validated = $request->validated(); 
        Post::create($validated + ['user_id'=>auth()->id()]);

       return redirect('/posts')->with('create', 'Post create successfully!');

    }

  
  
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
         $this->authorize('view',$post);
        // if($post->user_id != auth()->id()){
        //     abort(403);
        // }
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

        $this->authorize('view',$post);
        //   if($post->user_id != auth()->id()){
        //     abort(403);
        // }
         $categories = Category::all();
         return view ('edit', compact('post','categories'));
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
         $validated = $request->validated();

         $post->update($validated);

         return redirect('/posts')->with('edit', 'Post updated successfully!');
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
       return redirect('/posts')->with('delete', 'Post Deleted!');
    }
}
