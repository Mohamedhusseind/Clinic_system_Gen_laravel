<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'email' => $this->faker->word,
<<<<<<< HEAD
        'phone' => $this->faker->word,
        'address' => $this->faker->word,
=======
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
        'email_verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'password' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
<<<<<<< HEAD
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
=======
        'phone' => $this->faker->word,
        'address' => $this->faker->word
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
        ];
    }
}
