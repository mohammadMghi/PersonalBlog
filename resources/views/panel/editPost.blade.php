@extends('mainLayouts.mainAdminPanel')

@section('content')
<ul class="list-group mt-5">
    @foreach($posts as $post)
    <li class="list-group-item">{{$post->title}} <a class="btn text-danger" href="{{route('profile.post.delete' ,['post_id' => $post->id])}}">delete</a> 
    <a class="btn text-danger" href="{{route('profile.post.edit' ,['post_id' => $post->id])}}">edit</a> </li>

    @endforeach
</ul>
@endsection