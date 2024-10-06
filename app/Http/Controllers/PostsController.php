<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('pages.admin.postmanagement', compact('posts'));
    }

    public function create()
    {
        $post = null;
        return view('pages.admin.postmanagement', compact('post'));
    }

    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'link' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        try {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $imagePath = 'images/' . $imageName;
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    } else {
        $imagePath = null;
    }

    // Create a new post
    $post = new Post([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'link' => $request->input('link'),
        'image' => $imagePath,
    ]);

    // Save the post
    $post->save();

    // Redirect to the post management page
    return redirect()->route('posts.index')->with('status', 'Post created successfully!');
}


    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Get the post
        $post = Post::find($id);

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

        // Update the post
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->link = $request->input('link');

        $post->save();

        // Redirect to the post management page
        return redirect()->route('post-management')->with('status', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        // Get the post
        $post = Post::find($id);

        // Delete the post
        $post->delete();

        // Redirect to the post management page
        return redirect()->route('posts.index')->with('status', 'Post deleted successfully!');
    }
}