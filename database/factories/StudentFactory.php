<?php

    namespace Database\Factories;

    use App\Models\Student;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class StudentFactory extends Factory {

        protected $model = Student::class;

        public function definition(): array
        {
            return [
                'name'          => $this->faker->name(),
                'father_name'   => $this->faker->name(),
                'gender'        => $this->faker->randomElement(['male','female']),
                'nationality'   => $this->faker->country(),
//                'date_of_birth' => Carbon::now()->format('d-m-Y'),
                'date_of_birth' => $this->faker->date('d-m-Y'),
                'cnic_passport' => $this->faker->word(),
                'mobile'        => $this->faker->phoneNumber(),
                'email'         => $this->faker->unique()->safeEmail(),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),

                'user_id' => function () {
                    return User::factory()->create()->id;
                },
            ];
        }
    }
