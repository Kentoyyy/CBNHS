<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
