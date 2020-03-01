<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function save(Request $request)
    {
        $comment = new Comment();
        //TODO:: use form cheker
        $comment->posts_id = $request->comment_post_ID;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->commentText;
        $comment->save();
    }
}
