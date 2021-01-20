<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word;
        $slug = $title . '-' . Uuid::uuid6()->getInteger();
        return [
            'uuid' => $this->faker->uuid,
            'title' => $title,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->text,
            'price' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
