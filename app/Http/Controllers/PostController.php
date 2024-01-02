<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with('user')->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|max:1000'
        ]);

        $request->user()->posts()->create($validate);

        return $validate;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|max:1000'
        ]);

        $post->update($validate);

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }

    /**
     * Display a list of the resources from a specific user
     */
    public function user(string $id, string $locale = 'en')
    {
        App::setLocale($locale);

        $user = User::find($id);

        return view('posts.index', [
            'posts' => Post::with('user')->where('user_id', $id)->paginate(3),
            'user' => $user->name
        ]);
    }

    public function toggleFollow(string $id)
    {
        return 'logic for toggle like/dislike functionality';
    }
}
