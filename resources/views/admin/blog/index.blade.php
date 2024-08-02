<!DOCTYPE html>
<html>

<head>
    <title>Blog Posts</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="container">
        <h1>All Blog Posts</h1>
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        <a href="/admin/blog/create" class="btn">Create New Post</a>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="/admin/blog/{{ $post->id }}/edit" class="btn">Edit</a>
                                <form action="/admin/blog/{{ $post->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
