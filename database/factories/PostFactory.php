<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(10, true),
            'content' => $this->faker->paragraph(30),
            'image' => $this->faker->numberBetween(1, 4).'.jpg',
            'created_at' => $this->faker->dateTimeThisDecade('now'),
            'updated_at' => null,
            'categorie_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
