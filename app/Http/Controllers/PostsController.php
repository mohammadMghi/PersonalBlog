<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    public function viewPosts()
    {
        $posts = Post::paginate(4);

        $countPage =  $posts->lastpage();
        $categorys =  Category::all();
       
        return view('posts', compact('posts', 'countPage' , 'categorys'))->with($countPage);

    }
    public function viewWithCategory($category)
    {
         $posts = Post::where('category' , $category)->paginate(4);
    

         $countPage =  $posts->lastpage();
         $categorys =  Category::all();

         return view('posts', compact('posts', 'countPage' , 'categorys'))->with($countPage);
    }
}
