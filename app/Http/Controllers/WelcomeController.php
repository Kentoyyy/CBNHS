<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\slide;

class WelcomeController extends Controller
{
    public function welcome()
    {
    $posts = Post::all();
    $slides = Slide::all(); // Retrieve all slides from the database
    return view('welcome', compact('posts', 'slides'));
    }
}
