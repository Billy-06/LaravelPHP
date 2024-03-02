@extends('common.layouts.base')

@section("title", $post->title)

@section("content")

<div class="container-fluid">
    <div class="card mb-3 p-0">
        <div class="card-header">
            {{ $post->created_at }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <form action="{{ route('posts.delete', $post->id) }} " method="POST">
            @csrf
            @method("DELETE")
            <div class="d-flex justify-content-between p-3">
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="{{ route('posts.edits', $post->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </form>
    </div>
</div>

@endsection