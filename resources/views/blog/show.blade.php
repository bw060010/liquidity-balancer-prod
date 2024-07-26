@extends('layouts.app')

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
