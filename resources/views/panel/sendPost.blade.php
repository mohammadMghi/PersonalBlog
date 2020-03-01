@extends('mainLayouts.mainAdminPanel')

@section('content')

<div class="card mt-5">
    @include('sections.alerts')
    <div class="card-body">
        <form method="POST" action="{{route('profile.savePost')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="عنوان را وارد کنید">
            </div>
            <div class="form-group">

                <input name="slug" type="text" class="form-control" id="exampleFormControlInput1" placeholder="عنوان را وارد کنید">
            </div>
            <div class="form-group">

                <select name="category" class="form-control" id="exampleFormControlSelect1">
                    @foreach(App\Category::with('child')->where('sub_id' , 0)->get()
                    as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @if($item->with('child')->get()->count() > 0)
                    @foreach($item->child as $child)
                    <option value="{{$child->id}}"> - -{{$child->name}}</option>
                    @endforeach
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="form-group">

                <input name="image" type="file" class="form-control" accept="image/jpeg,png,jpg,gif,svg" required>

            </div>

            <div class="form-group">
    
                <textarea id="editor" name="content"></textarea>
            </div>
            <button class="btn btn-success mb-3">ارسال مطلب</button>
        </form>
    </div>
</div>
@endsection