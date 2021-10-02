<?php

    namespace Database\Factories;

    use App\Models\CourseVariation;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class CourseVariationFactory extends Factory {

        protected $model = CourseVariation::class;

        public function definition(): array
        {
            return [
                'duration'=>$this->faker->randomElement(["2 Months","3 Months","6 Months"]),
                'price'=>$this->faker->randomElement(["15000","25000","50000"])
            ];
        }
    }
