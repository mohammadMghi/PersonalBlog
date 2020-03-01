<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\post;
class Category extends Model
{
    protected $table = "categories";
    protected $fillable =[
        'name' , 'sub_id'
    ]; 

    public function post()
    {
        return $this->hasMany(Post::class , 'category');
    }

}
