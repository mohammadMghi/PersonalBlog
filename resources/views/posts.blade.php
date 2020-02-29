@extends('mainLayouts.main')

@section('content')
<div class="card-deck mt-5">
    @foreach($posts as $post)
    <div class="card ">
        <img class="card-img-top" src="http://localhost:8000/{{$post->cover}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title" id="text-limited-post-head">{{$post->title}}</h5>
            <p class="card-text" id="text-limited-post">{{ str_replace("&nbsp;","",strip_tags($post->content)) }}</p>
            <p class="card-text"><small class="text-muted">آخرین باری که نوشته شده در {{$post->updated_at}}</small></p>

            <a href="http://localhost:8000/post/{{$post->slug}}">ادامه مطلب</a>
        </div>
        
    </div>
    @endforeach



</div>
<nav aria-label="...">
  <ul class="pagination">
 
  
    @for($i=1 ; $i <= $countPage ; $i++)
   
    <li class="page-item"><a href="http://localhost:8000/posts?page={{$i}}" class="page-link" href="#">{{$i}}</a></li>
    @endfor
  
  </ul>
</nav>
@endsection