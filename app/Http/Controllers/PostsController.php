<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class PostsController extends Controller
{

    public function index(Category $category = null)
    {
        if (is_null($category)) {
            $posts = Post::latest()->get();
        } else {
            // orm 模型
            // $posts = $category->posts()->get();
            $posts = Post::where('category_id', $category->id)->get();
        }

        return view('index', ['currentCategory' => $category, 'posts' => $posts]);
    }


    public function show(Post $post)
    {

    }
}
