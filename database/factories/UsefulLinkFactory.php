<?php

namespace Database\Factories;

use App\Models\UsefulLink;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsefulLinkFactory extends Factory
{
    protected $model = UsefulLink::class;

    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'url' => fake()->url(),
            'category' => fake()->words(2, true),
        ];
    }
}
