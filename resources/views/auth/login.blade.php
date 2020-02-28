@extends('mainLayouts.main')
@section('content')
@include('sections.navbar')
@include('sections.alerts')
<div class="login d-flex  flex-column justify-content-center   align-items-center">
    <div class="card mt-5 col-md-7 mx-auto text-right">
 
        <h5 class="card-header text-right">ورود</h5>
        <div class="card-body ">
            <form method="POST" action="{{route('login')}}">
                @csrf   
                <div class="form-group ">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل را وارد کنید">

                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمزعبور را وارد کنید">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                        <p class="text-right mr-4">من را به خاطر بسبار</p>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">ورود</button>
            </form>

        </div>
    </div>
</div>
 
@endsection