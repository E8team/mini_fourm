<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 获取当前文章的分类
     * N:1
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
