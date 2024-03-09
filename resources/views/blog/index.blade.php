@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog</h1>
        <!-- Example: Dynamically list posts -->
        {{-- @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}">Read More</a>
        </div>
    @endforeach --}}
        <p>Welcome to our blog. Here's where you'll find the latest news and articles.</p>
    </div>
@endsection
