<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('common.posts.posts', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('common.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // Mass assignement with specified mass-assignable fields
        $validated_data = $request->validated();

        $post = $request->user()->posts()->create($validated_data);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        
        return redirect()->route('posts.details', $post->id)->with('success', 'Post submitted Title: ' . $post->title . 'Content: ' . $post->content );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view("common.posts.details", ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $this->authorize("update", $post);

        return view("common.posts.edit", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        
        $post = Post::findOrFail($id);
        $this->authorize("update", $post);

        $validated_data = $request->validated();

        $post->update($validated_data);
        
        return redirect()->route("posts.details", $post->id)
        ->with('success', 'Title Update: ' . $post->title . ' Content: ' . $post->content);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $this->authorize("delete", $post);
        $previous = $post->title;
        $post->delete();

        return redirect()->route('posts.store')
        ->with('success', "Deleted Post with title: " . $previous);
    }
}
