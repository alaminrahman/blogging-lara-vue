<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
Use App\Models\{
    Contact
};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactInformation>
 */
class ContactInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contact_id' =>  Contact::factory(),
            'pincode' => Str::random(),
            'near_by' => Str::random(),
            'tel_no' => mt_rand(100000, 999999), 
            'extra_detail' => Str::random(), 
        ];
    }
}
