<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function viewPosts()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        $countPage= count($posts)/4;
        
        return view('posts' , compact('posts' , 'countPage')  )->with($countPage);
    }
}
