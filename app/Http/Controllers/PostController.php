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

    public function store(Request $request){
        $post = new Post;
        $post->title = $request->title;// first post
        $post->slug = \Str::slug($request->title); // first-post
        $post->body = $request->body;
        $post->save();

        return redirect()->to('posts');

    }
}
