<x-micro-blog-layout>
    <x-slot:title>All posts</x-slot:title>

    <div class="my-14">
        <h1 class="text-6xl tracking-tighter font-bold mb-6">Latest posts</h1>
        <p class="mb-8 text-gray-500">A blog created with Laravel and Tailwind CSS</p>
    </div>

    <div class="my-14 flex flex-col md:flex-row">
        <p class="mb-8 text-gray-500 mr-20">18/08/2023</p>
        <div class="space-y-4">
            <h1 class="text-3xl font-bold tracking-tighter">Post title</h1>
            <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint sunt culpa consectetur? Dolores distinctio ex mollitia, officia quasi exercitationem fugiat illo hic dolorem, aut enim, commodi labore nemo sit at!</p>
            <p><a href="{{ route('posts.show', 1) }}" class="text-red-500 hover:text-red-900 mt-8">Read more</a></p>
            <div class="flex">
                <a href="{{ route('posts.edit', 1) }}" title="edit" class="mr-2 cursor-pointer">
                    <x-microblog.images.edit-icon />
                </a>

                <form method="POST" action="{{ route('posts.destroy', 1) }}">
                    @csrf
                    @method('delete')
                    
                    <button type="submit" href="{{ route('posts.destroy', 1) }}"
                        onclick="return confirm('Are you sure?')" title="delete" class="cursor-pointer">
                        <x-microblog.images.delete-icon />
                    </button>
                </form>    
            </div>
        </div>
    </div>
</x-micro-blog-layout>