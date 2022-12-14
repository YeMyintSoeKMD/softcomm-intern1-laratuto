<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $title = "LaraTuto";

        $posts = Post::all();        
        return view('post.index', compact('title', 'posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $formTitle = $request->title;
        $content = $request->content;

        return back();
        // return redirect('/posts')->with('formTitle', $formTitle);
    }
}