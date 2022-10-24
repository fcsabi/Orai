<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class personFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "email"=>$this->faker->email,
            "phone"=>$this->faker->phoneNumber,
            "card"=>$this->faker->creditCardType,
            "cardnumber"=>$this->faker->creditCardNumber,
            
        ];
    }
}
