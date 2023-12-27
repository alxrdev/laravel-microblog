<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page title</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="flex justify-between m-auto w-3/4 text-blue-200 shadow-inner p-3 bg-blue-600">
            <p><strong>Info</strong> New blog posts has been written</p>
            <strong class="text-xl align-center cursor-pointer">&times;</strong>
        </div>

        <div class="container mx-auto p-10">
            <header class="flex justify-between items-center">
                <div class="flex items-center">
                    <svg width="50" height="52" viewBox="0 0 50 52" xmlns="http://www.w3.org/2000/svg">
                        <title>Logomark</title>
                        <path
                            d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                            fill="#FF2D20" fill-rule="evenodd" />
                    </svg>

                    <div class="text-3xl hidden md:block text-gray-600 font-medium ml-2 tracking-tight">
                        <a href="#">LaravelMicroBlog</a>
                    </div>

                    <div class="ml-4">
                        <label>
                            <input
                                class="placeholder:italic placeholder:text-slate-400 bg-white w-full border-slate-300 rounded-md py-2 pl-9 pr-3 sm:text-sm"
                                placeholder="Search for posts ..."
                                type="text"
                                name="search"
                            />
                        </label>

                        <ul class="bg-white border border-gray-100 mt-2 absolute">
                            <li class="pl-8 pr-2 py-1 border-b-2 border-gray-100 relative hover:bg-yellow-50 hover:text-gray-900">
                                <a href="{{ route('posts.show', 1) }}">Post title</a>
                            </li>
                            <li class="pl-8 pr-2 py-1 border-b-2 border-gray-100 relative hover:bg-yellow-50 hover:text-gray-900">
                                <a href="{{ route('posts.show', 1) }}">Post title</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text-lg hidden md:flex space-x-6">
                    <p class="tracking-widest">Logged as: <a class="hover:text-stone-500" href="{{ route('dashboard') }}">John Smith</a></p>
                    <form action="POST" action={{ route('logout') }}>
                        <button type="submit" class="tracking-widest hover:text-stone-500">
                            Logout
                        </button>
                    </form>
                    <a class="inline font-bold text-sm px-6 py-2 text-white rounded-full bg-red-500 hover:bg-red-600" href="{{ route('posts.create') }}">New blog post</a>
                    <a class="tracking-widest hover:text-stone-500" href="{{ route('login') }}">Login</a>
                    <a class="tracking-widest hover:text-stone-500" href="{{ route('register') }}">Register</a>
                </div>

                <div class="space-y-2 cursor-pointer md:hidden" id="hamburger-icon">
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                </div>
            </header>

            <div class="md:hidden">
                <div id="mobile-menu" class="flex-col items-center hidden py-8 mt-10 space-y-6 bg-white left-6 right-6 drop-shadow-lg">
                    <p class="tracking-widest">Logged as: <a class="hover:text-stone-500" href="{{ route('dashboard') }}">John Smith</a></p>
                    
                    <form action="POST" action={{ route('logout') }}>
                        <button type="submit" class="tracking-widest hover:text-stone-500">
                            Logout
                        </button>
                    </form>

                    <a href="{{ route('posts.create') }}" class="inline font-bold text-sm px-6 py-2 text-white rounded-full bg-red-500 hover:bg-red-600">
                        New blog post
                    </a>
                    <a class="tracking-widest hover:text-stone-500" href="{{ route('login') }}">Login</a>
                    <a class="tracking-widest hover:text-stone-500" href="{{ route('register') }}">Register</a>
                </div>
            </div>

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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </a>
    
                        <form method="POST" action="{{ route('posts.destroy', 1) }}">
                            <button type="submit" href="{{ route('posts.destroy', 1) }}"
                                onclick="return confirm('Are you sure?')" title="delete" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </form>    
                    </div>
                </div>
            </div>
            <hr />

            {{ $slot }}

            <footer class="flex items-center justify-center mt-12">
                &copy; 2023 LaravelMicroBlog
            </footer>
        </div>
    </body>
</html>
