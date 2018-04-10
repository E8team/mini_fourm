<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * 获取当前分类下面的所有文章
     * 1:N
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
