<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function viewPosts()
    {
        $posts = Post::paginate(4);
 
        $countPage=    $posts->lastpage();
        
        return view('posts' , compact('posts' , 'countPage')  )->with($countPage);

        $users = DB::table('users')->simplePaginate(3);
    }
}
