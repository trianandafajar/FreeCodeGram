<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = auth()->user()
            ->following()
            ->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $posts)
            ->with('user')
            ->latest()
            ->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Image::make(public_path("storage/{$imagePath}"))
            ->fit(1200, 1200)
            ->save();

        $request->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . $request->user()->id);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
