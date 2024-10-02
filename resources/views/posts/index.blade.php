@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-primary">Create Post</a>
    @foreach ($posts as $post)
        <div>
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>{{ $post->content }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="100">
            @endif
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>
            <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
