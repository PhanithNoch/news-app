
<!-- list all articles -->


<!-- table   -->
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Articles') }}
            </h2>
            <x-button  variant="blue" href="{{ route('article.create') }}"
                class="justify-center max-w-xs gap-2">
                <span>Create</span>
            </x-button>
        </div>
    </x-slot>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Image</th>
      <th scope="col">Created</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articles as $article)
    <tr>
      <th scope="row">1</th>
      <td>{{$article->title}}</td>
      <td>{{$article->slug}}</td>
      <td>
        <img src="{{asset('images/'.$article->image)}}" alt="" width="100px">
   
      </td>
      <td>{{$article->created_at}}</td>
      <td>
     
      <form action="{{route('article.destroy',$article->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger bg-danger show_confirm">Delete</button>
      </form>

      </td>
    </tr>
    @endforeach


  </tbody>
</table>
</x-app-layout>
