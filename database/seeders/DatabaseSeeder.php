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

        Category::factory(15)->create();

        Contact::factory(15)->create();

        ContactInformation::factory(15)->create();
        
        Post::factory(10)->create([
            'user_id' =>  $user->id,
            'title' => Str::random(),
            'description' => Str::random(),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
