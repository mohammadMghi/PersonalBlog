@extends('mainLayouts.main')
@include('sections.navbar')
@section('content')
<div class="card mt-5 mb-2">
    <img class="card-img-top" src="/{{$post->cover}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title text-right">{{$post->title}}</h5>
        <p class="card-text text-right">{!!$post->content!!}</p>
    </div>
</div>


<form action="{{route('comment.save')}}" method="post" class="card text-right mt-3 mb-5">
    @csrf
    <div class="card-header text-right">
        ارسال نظر
    </div>

    <div class="form-group mr-5 ml-5 mt-3">
        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="ایمیل خود را وارد کنید">
    </div>
    <div class="form-group mr-5 ml-5 ">
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="نام خود را وارد کنید">
    </div>

    <div class="form-group mr-5 ml-5">
        <textarea name="commentText" class="form-control" id="exampleFormControlTextarea1" placeholder="متن خود را وارد کنید" rows="3"></textarea>
    </div>

    <input type="hidden" name="comment_post_ID" id="comment_post_ID" value="{{$post->id}}">
    <button class="btn btn-success">ارسال</button>

</form>
@foreach($comments as $comments)
<div class="card mt-2 mb-3">
    <div class="card-body text-right">
        <p>{{$comments->name}}  میگه : </p>
        <p>{{$comments->comment}}</p>
    </div>
</div>
 
@endforeach
@endsection