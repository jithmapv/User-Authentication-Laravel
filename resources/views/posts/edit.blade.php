@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" class="form-control" required>{{ $post->content }}</textarea><br>

        <label for="image">Image (Optional):</label>
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="100"><br><br>
        @endif
        <input type="file" id="image" name="image" class="form-control"><br>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    <a href="/posts/{{ $post->id }}" class="btn btn-secondary">Back to Post</a>
@endsection
