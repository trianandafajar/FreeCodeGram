<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = auth()->check() && auth()->user()->following->contains($user->id);

        $postCount = Cache::remember("count.posts.{$user->id}", now()->addSeconds(30), fn() => $user->posts()->count());

        $followersCount = Cache::remember("count.followers.{$user->id}", now()->addSeconds(30), fn() => $user->profile->followers()->count());

        $followingCount = Cache::remember("count.following.{$user->id}", now()->addSeconds(30), fn() => $user->following()->count());

        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user->profile);

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable|url',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile', 'public');

            Image::make(public_path("storage/{$imagePath}"))
                ->fit(1200, 1200)
                ->save();

            $data['image'] = $imagePath;
        }

        $user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
