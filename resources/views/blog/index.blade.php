@extends('layouts.app')

@section('title', 'Blogs - Latest Crypto News and Articles')
@section('description', 'Read the latest crypto news and articles on our blog.')
@section('keywords', 'crypto news, crypto articles, crypto blog')

@section('content')
    <div class="wide-container">
        @if ($posts->isEmpty())
            <p>No blog posts available.</p>
        @else
            <div class="posts-container">
                @foreach ($posts as $post)
                    <div class="post">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->excerpt }}</p>
                        <a href="/blog/{{ $post->slug }}">Read More</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
