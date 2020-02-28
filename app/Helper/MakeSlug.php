<?php
namespace App\Helper;

use Illuminate\Support\Str;
use App\Post;

class MakeSlug
{
    public function make($string)
    {
        $slug = Str::slug($string);
        $slug = $this->checkIfExist($slug);
        return $slug;
    }

    public function checkIfExist($slug)
    {
        $i = 1;
        $post = Post::where('slug' , $slug)->count(); 
        if ($post > 0) {
            return checkIfExist($slug + '/' + $i++);
        }
        return $slug;
    }
}
