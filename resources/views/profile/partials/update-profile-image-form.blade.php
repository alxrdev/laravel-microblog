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

        <label class="block mb-4">
            <span class="sr-only">Choose File</span>
            <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            @error('image')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </label>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'image-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >
                    {{ __('Saved') }}
                </p>
            @endif
        </div>
    </form>
</section>