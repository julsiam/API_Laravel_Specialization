<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => 'Juls',
            // 'gender'=>'male',
            // 'email' => 'julies@gmail.com',
            // 'phone'=>'098754267'

            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement($array = array ('male', 'female')) ,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->e164PhoneNumber,

        ];
    }
}
