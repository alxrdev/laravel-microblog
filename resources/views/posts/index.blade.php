<x-micro-blog-layout>
    <x-slot:title>All posts</x-slot:title>

    <div class="my-14">
        <h1 class="text-6xl tracking-tighter font-bold mb-6">Latest posts {{ $user ?? null }}</h1>
        <p class="mb-8 text-gray-500">A blog created with Laravel and Tailwind CSS</p>
    </div>

    @foreach ($posts as $post)
        <div class="my-14 flex flex-col md:flex-row">
            <p class="mb-8 text-gray-500 mr-20">{{ $post->created_at->format('j M Y') }}</p>
            <div class="space-y-4">
                <h1 class="text-3xl font-bold tracking-tighter">{{ $post->title }}</h1>
                <p class="text-gray-500">{{ Str::limit($post->content, 200, ' ...') }}</p>
                <p><a href="{{ route('posts.show', $post->id) }}" class="text-red-500 hover:text-red-900 mt-8">Read more</a></p>

                @if ($post->user->is(auth()->user()))
                    <div class="flex">
                        <a href="{{ route('posts.edit', $post->id) }}" title="edit" class="mr-2 cursor-pointer">
                            <x-microblog.images.edit-icon />
                        </a>

                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('delete')
                            
                            <button type="submit" href="{{ route('posts.destroy', $post->id) }}"
                                onclick="return confirm('Are you sure?')" title="delete" class="cursor-pointer">
                                <x-microblog.images.delete-icon />
                            </button>
                        </form>    
                    </div>
                @endif
            </div>
        </div>
    @endforeach
    <br>

    {{ $posts->links() }}
</x-micro-blog-layout>