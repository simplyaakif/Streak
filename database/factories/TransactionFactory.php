<?php

    namespace Database\Factories;

    use App\Models\Transaction;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class TransactionFactory extends Factory {

        protected $model = Transaction::class;

        public function definition(): array
        {
            return [
                'transactionable_id'   => $this->faker->randomNumber(),
                'transactionable_type' => $this->faker->word(),
                'amount'               => $this->faker->word(),
                'is_expense'           => $this->faker->boolean(),
                'is_paid'              => $this->faker->boolean(),
                'paid_on'              => Carbon::now(),
                'account_id'           => $this->faker->randomNumber(),
                'created_at'           => Carbon::now(),
                'updated_at'           => Carbon::now(),
            ];
        }
    }
