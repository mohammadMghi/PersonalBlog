@extends('mainLayouts.mainAdminPanel')

@section('content')

<div class="card mt-5">
    @include('sections.alerts')
    <div class="card-body">
        <form method="POST" action="{{route('profile.savePost')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">edit title</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">please select category about topic</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                    @foreach(App\Category::with('child')->where('sub_id' , 0)->get()
                    as $item)
                    @if($item->id == $post->category)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @if($item->with('child')->get()->count() > 0)
                    @foreach($item->child as $child)
                    @if($child->id == $post->category)
                    <option value="{{$child->id}}" selected> - -{{$child->name}}</option>
                    @else
                    <option value="{{$child->id}}"> - -{{$child->name}}</option>
                    @endif
                    @endforeach
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="validatedCustomFile">choose a image for cover </label>
                <input name="image" type="file" class="form-control" accept="image/jpeg,png,jpg,gif,svg" required>

            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">please edit content</label>
                <textarea id="editor" name="content">{{$post->content}}</textarea>
            </div>
            <button class="btn btn-success mb-3">edit</button>
        </form>
    </div>
</div>
@endsection