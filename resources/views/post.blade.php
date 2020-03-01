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


<form class="card text-right mt-3 mb-5">
    <div class="card-header text-right">
        ارسال نظر
    </div>
     
    <div class="form-group mr-5 ml-5 mt-3">
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ایمیل خود را وارد کنید">
    </div>
    <div class="form-group mr-5 ml-5 ">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="نام خود را وارد کنید">
    </div>

    <div class="form-group mr-5 ml-5"> 
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="متن خود را وارد کنید" rows="3"></textarea>
    </div>
    <button class="btn btn-success">ارسال</button>
</form>

@endsection