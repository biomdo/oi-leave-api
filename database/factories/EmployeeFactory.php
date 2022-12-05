<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->lastName();
        return [
            'pf_number' => fake()->unique()->randomNumber(4, true),
            'surname' => $name,
            'other_names' => fake()->firstName(),
            'title' => fake()->title(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make($name),
            'phone_number' => '07'.fake()->unique()->randomNumber(8, true), //Generate a phone number begining with 07 then followed by 8 digits 
            'id_type'=>fake()->randomElement(['National ID', 'Passport']),
            'id_number'=>fake()->unique()->randomNumber(8, true) //Generate a random number of lenth 8
        ];
    }
}
