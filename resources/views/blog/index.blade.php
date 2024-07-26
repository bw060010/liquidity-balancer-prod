@extends('layouts.app')

@section('content')
    <div class="wide-container">
        @if (empty($posts))
            <p>No blog posts available.</p>
        @else
            <div class="posts-container">
                @foreach ($posts as $post)
                    <div class="post">
                        <h2>{{ $post['title'] }}</h2>
                        <p>{{ $post['excerpt'] }}</p>
                        <a href="/blog/{{ $post['slug'] }}">Read More</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
