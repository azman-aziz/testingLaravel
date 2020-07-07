<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show(Category $category){

    	$Post = $category->posts()->latest()->paginate(6);

    	return view('posts.index', compact('Post','category'));
    }
}
