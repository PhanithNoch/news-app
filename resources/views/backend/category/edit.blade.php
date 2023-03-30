<x-app-layout>
    <x-slot name="header">
   
    </x-slot>

    <header>
        <h2 class="text-lg font-medium">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
  <form
        method="post"
        action="{{ route('category.update',$category->id) }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('PUT')

        <div class="space-y-2">
            <x-form.label
                for="name"
                :value="__('Name')"
            />

            <x-form.input
                id="name"
                name="name"
                type="text"
                class="block w-full"
                :value="old('name', $category->name)"
                required
                autofocus
                autocomplete="name"
            />

            <x-form.error :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="email"
                :value="__('Slug')"
            />

            <x-form.input
                id="email"
                name="slug"
                type="text"
                class="block w-full"
                :value="old('name', $category->slug)"

                required
                autocomplete="email"
            />

            <x-form.error :messages="$errors->get('email')" />

        </div>

        <div class="flex items-center gap-4">
            <x-button>
                {{ __('Save') }}
            </x-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
            


</x-app-layout>

