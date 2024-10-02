@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <div>
        <p>You're logged in!</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary" style="color: blue; padding: 10px; background-color: lightblue; border: none; text-decoration: none;">
            Go to Posts
        </a>
    </div>
@endsection
