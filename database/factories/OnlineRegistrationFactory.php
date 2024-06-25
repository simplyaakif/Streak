<?php

    namespace Database\Factories;

    use App\Models\OnlineRegistration;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class OnlineRegistrationFactory extends Factory {

        protected $model = OnlineRegistration::class;

        public function definition(): array
        {
            return [
                'name' =>  $this->faker->name(),
                'father_name' =>  $this->faker->name(),
                'email' =>  $this->faker->safeEmail(),
                'pakistan_mobile' =>  $this->faker->phoneNumber(),
                'whatsapp_mobile' =>  $this->faker->phoneNumber(),
                'pak_cnic' =>  $this->faker->randomNumber(10),
                'passport_number' =>  $this->faker->randomNumber(10),
            ];
        }
    }
