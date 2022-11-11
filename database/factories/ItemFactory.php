<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Item::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'project_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'parent_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
