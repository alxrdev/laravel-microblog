<x-micro-blog-layout>
    <x-slot:title>Edit post</x-slot:title>

    <div class="my-14">
        <h1 class="text-4xl">Edit blog post</h1>
        <div class="w-full mt-4">
            <form method="POST" action="{{ route('posts.update', 1) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('patch')
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="post-title">
                        Post title
                    </label>
                    <input
                        type="text"
                        name="title"
                        id="post-title"
                        class="shadow appearance-none border {{ $errors->first('title') ? 'border-red-500' : null }} rounded w-full py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="write post title here"
                        vale="{{ old('title', 'Post title') }}"
                        required
                    >
                    <p class="text-red-500 text-xs italic">{{ $errors->first('title') }}</p>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="post-content">
                        Post content
                    </label>
                    <textarea
                        name="content"
                        id="post-content"
                        class="drop-shadow-lg w-full h-60 p-4 border {{ $errors->first('content') ? 'border-red-500' : null }} focus:outline-none focus:shadow-outline"
                        placeholder="write post content here"
                        required
                    >{{ old('content', 'Post content') }}</textarea>
                    <p class="text-red-500 text-xs italic">{{ $errors->first('content') }}</p>
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                    type="submit">
                    Save post
                </button>
            </form>
        </div>
    </div>
</x-micro-blog-layout>