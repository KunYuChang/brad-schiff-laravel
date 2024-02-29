<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // https://laravel.com/docs/10.x/routing#route-model-binding
    public function viewSinglePost(Post $post)
    {
        return view('single-post', ['post' => $post]);
    }

    public function storeNewPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newPost = Post::create($incomingFields);

        return redirect("/post/{$newPost->id}")->with('success', 'New post successfully created.');
    }

    public function showCreateForm()
    {
        return view('create-post');
    }
}