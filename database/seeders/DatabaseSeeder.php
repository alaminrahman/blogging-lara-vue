<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use App\Models\{
    User,
    Post,
    Category,
    Contact,
    ContactInformation,
    Country,
    State,
    City,
    Image,
    Tag,
    Video,
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
        $contact = Contact::factory(1)->create();
        $contactinfo = ContactInformation::factory(1)->create();        
        $post = Post::factory(10)->create();
        $country = Country::factory(1)->create();
        $state = State::factory(10)->create();
        $city = City::factory(20)->create();
        $image = Image::factory(500)->create();
        
        $tag = Tag::factory()->create();
        $video = Video::factory()->create();

    }
}
