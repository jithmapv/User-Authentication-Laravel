@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" required><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" class="form-control" required></textarea><br>

        <label for="image">Image (Optional):</label>
        <input type="file" id="image" name="image" class="form-control"><br>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
    <a href="/posts" class="btn btn-secondary">Back to Posts</a>
@endsection
