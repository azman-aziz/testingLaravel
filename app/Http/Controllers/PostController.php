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
    		'Post' => Post::latest()->paginate(10),
    	]) ;
    }

    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }
}
