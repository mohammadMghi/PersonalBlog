@extends('mainLayouts.main')




@include('sections.navbar')

<header class="header">
    <div class="header-content text-white">
        <span class="header-primary-main">MoHaMMaD MogHaDaSI</span>
        <span class="header-primary">software engineer - web developer</span>
        <a href="#" class="btn btn-white">تماس با من</a>
    </div>
</header>
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

<div class="btn-more mb-5"><a class="btn btn-info" href="#">دیدن مطالب بیشتر</a></div>
@endsection