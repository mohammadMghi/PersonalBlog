<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Comment extends Model
{
    //
    protected $table = "comments";
    public function posts()
    {
        return $this->belongsTo(Post::class , 'posts_id');
    }
}
