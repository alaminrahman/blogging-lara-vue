<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
use App\Models\{
    User, 
    Contact
};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [           
            'user_id' =>  User::factory(),
            'address' => Str::random(),
            'phone' => mt_rand(100000, 999999),          
        ];
    }
}
