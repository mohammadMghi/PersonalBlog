<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    //
    public function view()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('welcome')->with('posts',$posts);
    }
}
