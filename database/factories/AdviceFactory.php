<?php

namespace Database\Factories;

use App\Models\Advice;
use App\Models\CategoryAdvice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advice>
 */
class AdviceFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     // create random data in our database
    public function definition(): array
    {
        return [
            'id' => null,
            'category_id' => CategoryAdvice::pluck('id')->random(),
            'name' => fake()->unique()->name(),
            'content' => fake()->sentence(1),
            'img' => "https://via.placeholder.com/640x480.png/000077?tex...",
        ];
    }
}
