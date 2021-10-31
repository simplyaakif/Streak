<?php

    namespace Database\Factories;

    use App\Models\Income;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class IncomeFactory extends Factory {

        protected $model = Income::class;

        public function definition(): array
        {
            return [
                'type' => $this->faker->numberBetween(0,4),
                'amount'     => $this->faker->randomNumber(),
                'paid_on'    => Carbon::now(),
                'paid_by'    => $this->faker->name(),
                'user_id'    => $this->faker->numberBetween(1,2),
                'remarks'    => $this->faker->sentence(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
    }
