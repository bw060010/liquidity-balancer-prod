<!DOCTYPE html>
<html>

<head>
    <title>Create Post</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="container">
        <h1>Create Blog Post</h1>
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <form action="/admin/blog" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            @error('title')
                <div>{{ $message }}</div>
            @enderror

            <label for="excerpt">Excerpt:</label>
            <input type="text" name="excerpt" id="excerpt">
            @error('excerpt')
                <div>{{ $message }}</div>
            @enderror

            <label for="content">Content:</label>
            <textarea name="content" id="content"></textarea>
            @error('content')
                <div>{{ $message }}</div>
            @enderror

            <label for="meta_description">Meta Description:</label>
            <input type="text" name="meta_description" id="meta_description">
            @error('meta_description')
                <div>{{ $message }}</div>
            @enderror

            <label for="meta_keywords">Meta Keywords:</label>
            <input type="text" name="meta_keywords" id="meta_keywords">
            @error('meta_keywords')
                <div>{{ $message }}</div>
            @enderror

            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug">
            @error('slug')
                <div>{{ $message }}</div>
            @enderror

            <button type="submit">Save</button>
        </form>
    </div>
</body>

</html>
