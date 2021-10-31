<?php

    namespace Database\Factories;

    use App\Models\Expense;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;
    use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Exp;

    class ExpenseFactory extends Factory {

        protected $model = Expense::class;

        public function definition(): array
        {
            return [
                'amount'=>$this->faker->randomNumber(),
                'paid_to' => $this->faker->name(),
                'is_paid' => $this->faker->randomElement([0,1]),
                'paid_by' => $this->faker->randomElement([1,2]),
                'type' => Expense::types[$this->faker->numberBetween(0,5)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'paid_on' => $this->faker->dateTimeBetween('-10 months','now'),
            ];
        }
    }
