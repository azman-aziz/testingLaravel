<?php

namespace App\Http\Controllers;

// memanggil halaman / class
use \App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post){

    		// first() = di gunakan unutuk mengembalikan value dari db
    		// firstofFail() = kondisi jika syarat tidak ada maka langsung di arah ke halaman 404
    	
    	// $post = Post::where('slug', $slug)->firstorFail();
    	// DD() =  var_dump()

    	/*
    	if (!$post) {
    		//di gunakan untuk memanggil halaman 404
    		abort(404);
    	}*/


    	return view('posts.show', compact('post'));
    }
}
