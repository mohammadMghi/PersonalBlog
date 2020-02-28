<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Helper\MakeSlug;

class ProfileController extends Controller
{
    public function view()
    {
        return view('panel.profile');
    }
    public function viewSendPost()
    {
        return view('panel.sendPost');
    }

    public function savePost(Request $request)
    {

        $post = resolve(Post::class);
        $makeSlug = resolve(MakeSlug::class);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->cover = $this->uploadImg($request);
        $post->category = $request->category;
        $post->user_id = $request->user()->id;
        $post->slug = $makeSlug->make($request->slug);
    
        $post->save();
    }

    public function test()
    {
        return view('test');
    }

    public function uploadImg(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        
        return $imagePath;
    }

    public function viewCategory()
    {
        $categories = Category::all();
        return view('panel.editCategory',compact('categories'));
    }

    public function deleteCategory(Request $request){
         $category = Category::find($request->input('category'));
         $category->delete();
    }
    public function createCategory(Request $request)
    {
        $category = new Category();
        $category->sub_id = $request->input('main_category');
        $category->name = $request->input('name_category');
        $category->save();
    }

    public function showPosts()
    {
        $posts = Post::all();
        return view('panel.editPost' ,compact('posts'));
    }

    public function deletePost(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->delete();
        return back();
    }
    public function editPost(Post $post)
    {
        dd($post);
    }

    public function showEditContent(Request $request)
    {
        $post = Post::find($request->post_id);
        return view('panel.editPostContent' , compact('post'));
    }
}
