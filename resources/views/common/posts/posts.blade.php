@extends('common.layouts.base')

@section("title", "Create Post")

@section("content")

<h1 class="text-center">My Posts</h1>
<div class="container">
    <div class="row">
        
        @forelse ( $posts as $post )
        <div class="card mb-3 p-0">
            <div class="card-header">
                {{ $post->created_at }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between p-3">
                <p class="card-text">Created by: {{ $post->user->name }}</p>
                <a href="{{ route('posts.details', $post->id) }}" class="btn btn-primary justify-content-end">View Post</a>
            </div>
        </div>
        @empty
        <div>
        <p>No posts available yet</p>    
        </div>   
        @endforelse
    </div>
</div>

@endsection