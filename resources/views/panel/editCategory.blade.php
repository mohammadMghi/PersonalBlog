@extends('mainLayouts.mainAdminPanel')

@section('content')

<div class="card mt-5">
    <div class="card-header">
        Delete category
    </div>
    <div class="card-body">
        <form id="deleteCategory" method="POST" action="{{route('category.delete')}}">
            @csrf
            <div class="form-group">
                <select name="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose category...</option>
                    @foreach(App\Category::with('child')->where('sub_id' , 0)->get()
                    as $item)
                    <option  value="{{$item->id}}">{{$item->name}}</option>
                    @if($item->with('child')->get()->count() > 0)
                    @foreach($item->child as $child)
                    <option value="{{$child->id}}"> --{{$child->name}}</option>
                    @endforeach
                    @endif
                    @endforeach
                </select>
            </div>
            <button class="btn bg-danger text-light">delete</button>
        </form>

    </div>
</div>
<div class="card mt-5">
    <div class="card-header">
        Create category
    </div>
    <div class="card-body">
        <form id="add_new_category" method="post" action="{{route('category.create')}}" >
            @csrf
            <div class="form-group">
                <select name="main_category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected value="none">wighout main category</option>
                    @foreach(App\Category::with('child')->where('sub_id' , 0)->get()
                    as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category">choose category new name</label>
                <input name="name_category"  class="form-control"  placeholder="Enter new name">          
            </div>
            <button class="btn bg-success text-light">create</button>
        </form>

    </div>
</div>


@endsection