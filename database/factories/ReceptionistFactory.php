<?php

namespace Database\Factories;

use App\Models\Receptionist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceptionistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receptionist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => $this->faker->word,
        'name' => $this->faker->word,
        'phone' => $this->faker->word,
        'address' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word
        ];
    }
}
