<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
        
    public function index()
    {
        $posts = Post::all();
        return view('pages.admin.postmanagement', compact('posts'));
    }

    public function create()
    {
        return view('pages.admin.postmanagement');
    }  

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->link = $request->input('link');
        $post->save();
        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.admin.postmanagement', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->link = $request->input('link');
        $post->save();
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}