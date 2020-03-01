@extends('mainLayouts.main')
@include('sections.navbar')
@section('content')
<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    دسته بندی
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    @foreach($categorys as $category)
    <button class="dropdown-item" type="button"><a href="../category/{{$category->id}}">{{$category->name}}</a></button> 
    @endforeach

  </div>
</div>

<div class="card-deck mt-5">
  @foreach($posts as $post)
  <div class="card col-3">

    <img class="card-img-top mt-3" src="http://localhost:8000/{{$post->cover}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-right" id="text-limited-post-head">{{$post->title}}</h5>
      <p class="card-text text-right" id="text-limited-post">{{ str_replace("&nbsp;","",strip_tags($post->content)) }}</p>
      <p class="card-text text-right"><small class="text-muted">آخرین باری که نوشته شده در {{$post->updated_at}}</small></p>

      <a href="http://localhost:8000/post/{{$post->slug}}">ادامه مطلب</a>
    </div>

  </div>
  @endforeach



</div>
<nav aria-label="...">
  <ul class="pagination mt-4 mb-5">
    @for($i=1 ; $i <= $countPage ; $i++) <li class="page-item"><a href="{{Request::url()}}?page={{$i}}" class="page-link" href="#">{{$i}}</a></li>
      @endfor

  </ul>
</nav>
@endsection