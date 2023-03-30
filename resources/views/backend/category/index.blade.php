<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Categories') }}
            </h2>
            <x-button  variant="blue" href="{{ route('category.create') }}"
                class="justify-center max-w-xs gap-2">
                <span>Create</span>
            </x-button>
        </div>
    </x-slot>


</x-app-layout>

