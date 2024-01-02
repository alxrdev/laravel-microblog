<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::paginate(3)
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
    public function show(string $id)
    {
        return view('posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|max:1000'
        ]);

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete post from the database';
    }

    /**
     * Display a list of the resources from a specific user
     */
    public function user(string $id, string $locale = 'en')
    {
        App::setLocale($locale);
        return view('posts.index');
    }

    public function toggleFollow(string $id)
    {
        return 'logic for toggle like/dislike functionality';
    }
}
