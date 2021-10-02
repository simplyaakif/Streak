<?php

    namespace Database\Factories;

    use App\Models\Discussion;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class DiscussionFactory extends Factory {

        protected $model = Discussion::class;

        public function definition(): array
        {
            return [
                'title'       => $this->faker->text(),
                'description' => $this->faker->paragraph(4),
                'user_id'     => $this->faker->randomNumber(),
                'best_reply' => $this->faker->randomNumber(),
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ];
        }
    }
