<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Post extends Model
{
    //
    protected $table = "posts";
    public $timestamps = true;
    public function comments()
    {
        return $this->hasMany(Comment::class , 'posts_id');
    }
}
