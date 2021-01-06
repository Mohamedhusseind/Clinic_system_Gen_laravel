<?php

namespace Database\Factories;

use App\Models\recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class recipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => $this->faker->word,
        'patient_id' => $this->faker->word,
        'product_name' => $this->faker->word,
        'description' => $this->faker->word,
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
