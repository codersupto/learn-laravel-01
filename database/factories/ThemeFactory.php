<?php

namespace Database\Factories;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ThemeFactory extends Factory
{
    protected $model = Theme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'mode' => 'light',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
