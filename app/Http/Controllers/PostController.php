<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    	//take() : untuk membatasi data yang tampil
    	//paginate() = membuat pagination
    	$Post = Post::paginate(5);
    	return view('posts.index', [
    		'Post' => Post::latest()->paginate(5),
    	]) ;
    }

    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        // validate 
        
        $attr = request()->validate([

            'title' => 'required|min:3',
            'body' => 'required',

        ]);

        //default slug
      
       $attr['slug'] = \Str::slug(request('title'));

       //create new post
       Post::create($attr);


       session()->flash('success', 'succes input into database');
       // session()->flash('error', 'error input into database');
       return redirect('/posts');
    }
}
