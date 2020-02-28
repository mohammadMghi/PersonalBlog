@extends('mainLayouts.main');

@section('content')
<div class="card">
    <img class="card-img-top" src="/{{$post->cover}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->content}}</p>
    </div>
</div>
@endsection