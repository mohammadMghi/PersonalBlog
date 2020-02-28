@extends('mainLayouts.main')
 
@include('sections.navbar')
@section('content')


<div class="register d-flex flex-column justify-content-center   align-items-center">

<div class="card mt-4 col-md-7 text-right">
    <h5 class="card-header text-right">عضویت</h5>
    <div class="card-body">
 
        <form method="POST" action="{{__('register')}}">
            @csrf
            <div class="form-group ">
             @include('sections.alerts')
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل را وارد کنید">
                <small id="emailHelp" class="form-text text-muted text-right">ما هیچ وقت ایمیل شما را جایی منتشر نمی کنیم </small>
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمزعبور را وارد کنید">
            </div>
            <div class="form-group">
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمزعبور خود را مجدد وارد کنید">
            </div>
            <div class="form-group">
                <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="نام خود را وارد کنید">
            </div>
            <button type="submit" class="btn btn-primary">عضویت</button>
        </form>

    </div>
</div>
</div>


@endsection