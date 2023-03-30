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
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Created</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">1</th>
      <td>{{$category->name}}</td>
      <td>{{$category->slug}}</td>
      <td>{{$category->created_at}}</td>
      <td>
      <form action="{{ route('category.destroy',$category->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>

</x-app-layout>

