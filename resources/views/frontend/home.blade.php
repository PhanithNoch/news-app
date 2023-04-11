
@extends('frontend.master.master')

@section('content')
    <div class="container">



    <div class="row mt-5">

    @foreach($articles as $article)

    <div class="col-md-4">
    <div class="card" >

    <img src="{{url('storage/'.$article->image)}}" class="card-img-top" alt="..." width="100%" >
    <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->content}}</p>
    <!-- <a href="{{route('article.show',$article->id)}}" class="btn btn-primary">Go somewhere</a> -->

    </div>

    </div>

</div>
@endforeach
     
    </div>

 
    </div>

@endsection
