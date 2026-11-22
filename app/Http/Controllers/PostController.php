<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));

        $post = Post::all();
        return view('index', compact('post'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'content' => 'required',
        ]);
        $post = Post::create($validated);

        return redirect('/posts');
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));

        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }
}


