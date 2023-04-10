<x-app-layout>
    <x-slot name="header">
   
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Create Article') }}
        </h2>

   
    </header>

    </x-slot>

            
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
    <form
        method="post"
        action="{{ route('article.store') }}"
        class="mt-6 space-y-6"
        enctype="multipart/form-data"
    >
        @csrf
        <!-- @method('POST') -->

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
                for="content"
                :value="__('content')"
            />

            <x-form.input
                id="content"
                name="content"
                type="text"
                class="block w-full"
             
                required
                autocomplete="content"
            />

            <x-form.error :messages="$errors->get('content')" />

        </div>
        <div class="space-y-2">
            <x-form.label
                for="slug"
                :value="__('slug')"
            />

            <x-form.input
                id="slug"
                name="slug"
                type="text"
                class="block w-full"
             
                required
                autocomplete="slug"
            />

            <x-form.error :messages="$errors->get('slug')" />

        </div>
        <div class="space-y-2">
        <x-form.label
                for="email"
                :value="__('image')"
            />

            
            <div class="center">
                <div class="form-input">
                    <div class="preview">
                        <img src="" alt="" id="file-ip-1-preview">
                    </div>
                    <label for="" >Upload Image</label>
                    <input type="file" name="image" id="file-ip-1" accept="image/*" onchange="showPreviewImg(event);">
                </div>
            </div>

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
    </div>


</x-app-layout>

