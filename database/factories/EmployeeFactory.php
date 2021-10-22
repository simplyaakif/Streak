<?php

    namespace Database\Factories;

    use App\Models\Employee;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class EmployeeFactory extends Factory {

        protected $model = Employee::class;

        public function definition(): array
        {
            return [
                'name'              => $this->faker->name(),
                'father_name'       => $this->faker->name(),
                'gender'            => $this->faker->word(),
                'date_of_birth'     => Carbon::now(),
                'mobile'            => $this->faker->word(),
                'telephone'         => $this->faker->word(),
                'designation'       => $this->faker->word(),
                'earning_type'      => $this->faker->word(),
                'salary_amount'     => $this->faker->word(),
                'salary_commission' => $this->faker->word(),
                'address'           => $this->faker->address(),
                'user_id'           => $this->faker->randomNumber(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ];
        }
    }
