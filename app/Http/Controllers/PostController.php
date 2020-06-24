<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug){

    	$post = \DB::table('posts')->where('slug', $slug)->first();
    	// DD() =  var_dump()
    	if (!$post) {
    		# code...
    	}
    	return view('posts.show', compact('post'));
    }
}
