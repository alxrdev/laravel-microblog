<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Image') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Update your profile image') }}
        </p>
    </header>

    <img src="http://localhost/images/test-image.png" alt="profile image">

    <form method="POST" action="{{ route('profile.image') }}" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')

        <label class="block mb-4">
            <span class="sr-only">Choose File</span>
            <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            <span class="text-red-600 text-sm">Error message</span>
        </label>

        <p class="text-sm text-gray-600">Saved</p>
    </form>
</section>