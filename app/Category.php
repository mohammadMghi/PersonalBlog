<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Category extends Model
{
    protected $table = "categories";
    protected $fillable =[
        'name' , 'sub_id'
    ]; 

    public function child()
    {
        return $this->hasMany($this , 'sub_id');
    }

}
