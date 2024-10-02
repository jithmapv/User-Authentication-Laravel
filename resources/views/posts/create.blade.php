@extends('layouts.app')

@section('content')
    <h1 style="color: red;">Create New Post</h1>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title" style="color: red;">Title:</label>
        <input type="text" id="title" name="title" class="form-control" required><br>

        <label for="content" style="color: red;">Content:</label>
        <textarea id="content" name="content" class="form-control" required></textarea><br>

        <label for="image" style="color: red;">Image :</label>
        <input type="file" id="image" name="image" class="form-control"><br>

        <button type="submit" class="btn btn-primary" style="color: blue;">Create Post</button>
    </form>
    <a href="/posts" class="btn btn-secondary" style="color: blue;">Back to Posts</a>
@endsection
