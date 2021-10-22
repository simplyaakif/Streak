<?php

    namespace Database\Factories;

    use App\Models\Batch;
    use App\Models\Course;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class BatchFactory extends Factory {

        protected $model = Batch::class;

        public function definition(): array
        {
            return [
                'title'       => $this->faker->word(),
                'limit'       => $this->faker->randomNumber(),
                'session_duration'        => $this->faker->randomElement(['2 Hours','1.5 Hour','60 Minutes']),
                'description' => $this->faker->text(),
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),

                'course_id' => function () {
                    return Course::factory()->create()->id;
                },
            ];
        }
    }
