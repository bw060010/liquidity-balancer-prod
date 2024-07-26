@extends('layouts.app')

@section('title', $post['title'] . ' - Latest Crypto News and Articles')

@section('content')
    <div class="post-content-container">
        <div class="post-content">
            <h1>{{ $post['title'] }}</h1>
            <div class="post-body">
                <p>{!! $post['content'] !!}</p>
            </div>
        </div>
        <a href="/blog" class="return-link">Return to Blog</a>
    </div>
@endsection
