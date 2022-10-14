<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use App\Models\{
    User,
    Post,
    Category,
    Image,
    Tag,
    Admin,
};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        $category = Category::factory(1)->create();            
        $post = Post::factory(10)->create();      
        $image = Image::factory(500)->create();        
        $tag = Tag::factory(10)->create();
        $tag = Admin::factory()->create();

    }
}
