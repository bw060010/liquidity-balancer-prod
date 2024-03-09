<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller {
    public function index() {
        // Example: Fetch posts from a model (if you have one)
        // $posts = BlogPost::all();

        // Return the blog view, potentially passing in any necessary data
        return view('blog.index'/*, compact('posts')*/);
    }
}
