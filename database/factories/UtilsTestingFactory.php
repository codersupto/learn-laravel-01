<?php

namespace Database\Factories;

use App\Models\UtilsTesting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UtilsTestingFactory extends Factory
{
    protected $model = UtilsTesting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_uuid' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
