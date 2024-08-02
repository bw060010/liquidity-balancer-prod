<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

/**
 * The BlogController class handles the logic for managing blog posts.
 */
class BlogController extends Controller {
    /**
     * Display a listing of the blog posts.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }

    /**
     * Display the specified blog post.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

    /**
     * Display a listing of the blog posts in the admin panel.
     *
     * @return \Illuminate\View\View
     */
    public function admin_index() {
        $posts = Post::all();
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created blog post in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_description' => 'required|string|max:255',
            'meta_keywords' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
        ]);

        Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'slug' => Str::slug($request->slug),
        ]);

        return redirect('/admin/blog')->with('success', 'Post created successfully');
    }

    /**
     * Show the form for editing the specified blog post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('admin.blog.edit', compact('post'));
    }

    /**
     * Update the specified blog post in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_description' => 'required|string|max:255',
            'meta_keywords' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $id,
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'slug' => Str::slug($request->slug),
        ]);

        return redirect('/admin/blog')->with('success', 'Post updated successfully');
    }

    /**
     * Delete the specified blog post from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/admin/blog')->with('success', 'Post deleted successfully');
    }
}
