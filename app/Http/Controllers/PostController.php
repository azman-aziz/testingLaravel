<?php

namespace App\Http\Controllers;

//bisa di gunakan semisal letak tag name nya sama
use App\{Post,Category,Tag};

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
        return view('posts.create', [
          'post' => new Post(),
          'categories' => Category::get(),
          'tags' => Tag::get(),
        ]);
    }


    public function store(PostRequest $request){

      $attr = $request->all();
      
       $attr['slug'] = \Str::slug(request('title'));
       $attr['category_id'] = request('category');
       //create new post
       $post = Post::create($attr);

       $post->tags()->attach(request('tags'));


       session()->flash('success', 'succes input into database');
       // session()->flash('error', 'error input into database');
       return redirect('/posts');
    }


    public function edit(Post $post){
       return view('posts.edit', [
          'post' => $post,
          'categories' => Category::get(),
          'tags' => Tag::get(),
       ]);
    }


    public function update(Request $request, Post $post){

      $attr = $request->all();
      $attr['category_id'] = request('category');            

       $post->update($attr);
       $post->tags()->sync(request('tags'));

        session()->flash('success', 'succes Updated');
       // session()->flash('error', 'error input into database');
       return redirect('/posts');

    }


    public function destroy(Post $post){

      $post->tags()->detach();
      $post->delete();
     
       session()->flash('success', 'Deleted this posts');
       return redirect('posts');
    }

    
}
