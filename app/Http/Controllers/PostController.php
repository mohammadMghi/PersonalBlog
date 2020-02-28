<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function findPostWithSlug($slu)
    {
    
        $post = Post::where('slug' , $slu)->first();
  
        return $post;
    }

    public function viewPost($slug)
    {
        $post = $this->findPostWithSlug($slug);
        return view('post',compact('post'));
    }
}
