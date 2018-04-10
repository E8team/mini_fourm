<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = \App\Category::create([
            'slug' => 'tech',
            'name' => '技术',
        ]);

        $category2 = \App\Category::create([
            'slug' => 'play',
            'name' => '好玩',
        ]);

        $category3 = \App\Category::create([
            'slug' => 'creative',
            'name' => '创意',
        ]);

        \App\Post::create([
            'title' => '文章111',
            'content' => '正文222',
            'category_id' => $category1->id,
            'user_id' => 1,
            'last_reply_id' => 1,
        ]);

        \App\Post::create([
            'title' => '文章333',
            'content' => '正文444',
            'category_id' => $category1->id,
            'user_id' => 1,
            'last_reply_id' => 1,
        ]);

        \App\Post::create([
            'title' => '文章555',
            'content' => '正文666',
            'category_id' => $category2->id,
            'user_id' => 1,
            'last_reply_id' => 1,
        ]);
        
    }
}
