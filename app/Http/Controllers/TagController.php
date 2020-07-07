<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function show(Tag $tag){
    	$Post = $tag->posts()->latest()->paginate(6);
    	return view('posts.index', compact('Post','tag'));
    }
}
