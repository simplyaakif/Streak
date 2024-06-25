<?php

    namespace Database\Factories;

    use App\Models\Query;
    use App\Models\User;

    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class QueryFactory extends Factory {

        protected $model = Query::class;

        public function definition(): array
        {
            return [
                'name'       => $this->faker->name(),
                'mobile'     => $this->faker->phoneNumber(),
                'email'      => $this->faker->unique()->safeEmail(),
                'address'    => $this->faker->address(),
                'remarks'    => $this->faker->word(),
                'telephone'  => $this->faker->word(),
                'p_timings'  => $this->faker->word(),
                'reference'  => $this->faker->word(),
                'created_at' => $this->faker->dateTime(),
                'updated_at' => $this->faker->dateTime(),
                'staff_user_id'    => User::all('id')->random()->id,
            ];
        }
    }
