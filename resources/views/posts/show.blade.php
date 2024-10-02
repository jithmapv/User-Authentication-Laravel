@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="300"><br><br>
    @endif

    <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit Post</a>
    <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
    <a href="/posts" class="btn btn-secondary">Back to Posts</a>
@endsection
