<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Home', compact('posts')); // ['posts' => $posts]
    }
    public function about()
    {
        return Inertia::render('About');
    }
}
