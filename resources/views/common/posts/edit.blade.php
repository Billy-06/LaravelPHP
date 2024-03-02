@extends('common.layouts.base')

@section("title", "Update" . $post->title)

@section("content")

<h1 class="text-center">Edit Post</h1>
<div class="container">
    <div class="row justify-content-center">
        <form class="col-md-6" method="POST" action="{{ route('posts.update', ['post'=> $post->id]) }}">
            @csrf
            @method('PUT')

            {{-- Post title --}}
            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input class="form-control  @error('title') border-danger @enderror" 
                value="{{ old('title', $post->title) }}" type="text" name="title" id="title" placeholder="Making Lasagna">
                
                @error('title')
                    <p class="text-danger">{{ @$message }}</p>
                @enderror
            </div>
            {{-- Post Content --}}
            <div class="mb-3">
                <label class="form-label" for="content">Content</label>
                <textarea class="form-control @error('content') border-danger @enderror " 
                value="{{ old('content', $post->content) }}" name="content" id="content" rows="4" placeholder="Making Lasagna"></textarea>
                
                @error('content')
                    <p class="text-danger" > {{ @$message }} </p>
                @enderror
            </div>
            {{-- PActions --}}
            <div class="mb-3 d-flex justify-content-between">
                <a href="{{ route('posts.details', $post->id) }}" class="btn btn-warning"> Cancel </a>
                <button type="submit" class="btn btn-primary"> Update Post </button>
            </div>
        </form>
    </div>
</div>

@endsection