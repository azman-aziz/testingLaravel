<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    	//take() : untuk membatasi data yang tampil
    	//paginate() = membuat pagination
    	$Post = Post::paginate(6);
    	return view('posts.index', [
    		'Post' => Post::latest()->paginate(6),
    	]) ;
    }

    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(PostRequest $request){


      $attr = $request->all();
      
       $attr['slug'] = \Str::slug(request('title'));
       //create new post
       Post::create($attr);


       session()->flash('success', 'succes input into database');
       // session()->flash('error', 'error input into database');
       return redirect('/posts');
    }


    public function edit(Post $post){
       return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post){

      $attr = $request->all();

            

       $post->update($attr);
        session()->flash('success', 'succes Updated');
       // session()->flash('error', 'error input into database');
       return redirect('/posts');

    }


    public function destroy(Post $post){
       $post->delete();
        
       session()->flash('success', 'Deleted this posts');
       return redirect('posts');
    }

    
}
