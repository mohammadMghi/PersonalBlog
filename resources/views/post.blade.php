@extends('mainLayouts.main')

@section('content')
<div class="card mb-5">
    <img class="card-img-top" src="/{{$post->cover}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title text-right">{{$post->title}}</h5>
        <p class="card-text text-right">{{$post->content}}</p>
    </div>
</div>
@endsection