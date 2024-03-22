@extends('common.layouts.base')

@section("title", $post->title)

@section("content")

<div class="container-fluid pt-5">
    <h2 class="card-title">{{ $post->title }}</h2>
    <hr>
    <div class="card mb-3 p-0">
        <div class="card-header">
            {{ $post->created_at }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="card-footer">
            <p class="card-text">Created by: {{ $post->user->name }}</p>
        </div>
        <div class="d-flex justify-content-between p-3">
            <span>
                @can("delete", $post)
                <form action="{{ route('posts.delete', $post->id) }} " method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endcan

            </span>
            @can("update", $post)
            <a href="{{ route('posts.edits', $post->id) }}" class="btn btn-primary">Edit</a>
            @endcan
        </div>
    </div>

    <a href="{{ route('posts.store') }}" class="btn btn-warning">Back</a>
</div>

@endsection