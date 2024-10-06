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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->link = $request->input('link');

        // Handle image upload
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');

            // Generate a unique name for the file
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the file to the storage location
            $image->storeAs('public/images', $imageName);

            // Store the image path in the database
            $post->image = 'images/' . $imageName;
        }

        $post->save();
        return redirect()->route('posts.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->link = $request->input('link');

        // Handle image upload
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');

            // Generate a unique name for the file
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the file to the storage location
            $image->storeAs('public/images', $imageName);

            // Store the image path in the database
            $post->image = 'images/' . $imageName;
        }

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