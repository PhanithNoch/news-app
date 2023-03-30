<x-app-layout>
    <x-slot name="header">
   
    </x-slot>

    <header>
        <h2 class="text-lg font-medium">
            {{ __('Create Article') }}
        </h2>

   
    </header>
  <form
        method="post"
        action="{{ route('article.store') }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('POST')

        <div class="space-y-2">
            <x-form.label
                for="name"
                :value="__('Ttile')"
            />

            <x-form.input
                id="name"
                name="title"
                type="text"
                class="block w-full"
              
                required
                autofocus
                autocomplete="name"
            />

            <x-form.error :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="email"
                :value="__('content')"
            />

            <x-form.input
                id="email"
                name="content"
                type="text"
                class="block w-full"
             
                required
                autocomplete="email"
            />

            <x-form.error :messages="$errors->get('email')" />

        </div>
        <div class="space-y-2">
            <x-form.label
                for="email"
                :value="__('slug')"
            />

            <x-form.input
                id="email"
                name="slug"
                type="text"
                class="block w-full"
             
                required
                autocomplete="email"
            />

            <x-form.error :messages="$errors->get('email')" />

        </div>
        <div class="space-y-2">
        <x-form.label
                for="email"
                :value="__('Image')"
            />

            <input type="file" name="image" >

        </div>
        <div class="space-y-2">
        <x-form.label
                for="email"
                :value="__('Published')"
            />

            <input type="checkbox" name="is_published" >

        </div>

        <div class="space-y-2">
        <x-form.label
                for="email"
                :value="__('Category')"
            />
            <!-- add select category -->
            <select name="category_id" id="">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center gap-4">
            <x-button>
                {{ __('Save') }}
            </x-button>

        </div>
    </form>
            


</x-app-layout>

