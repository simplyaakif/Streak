<?php

    namespace Database\Seeders;

    use App\Models\Course;
    use Illuminate\Database\Seeder;

    class CoursesTableSeeder extends Seeder {

        public function run()
        {
            $courses = [
                [
                    'id'          => 1,
                    'title'       => 'Spoken English',
                    'description' => 'Course containing the details of the Spoken English',
                    'price' => '29500',
                    'duration' => '3 Months',
                ],[
                    'id'          => 2,
                    'title'       => 'IELTS',
                    'description' => 'IELTS course for going outside',
                    'price' => '21000',
                    'duration' => '6 Weeks',
                ],[
                    'id'          => 3,
                    'title'       => 'Graphics Designing',
                    'description' => 'Designing course',
                    'price' => '15500',
                    'duration' => '2 Months',
                ],[
                    'id'          => 4,
                    'title'       => 'Web Course',
                    'description' => 'Web development course',
                    'price' => '15500',
                    'duration' => '2 Months',
                ],
            ];
            Course::insert($courses);
        }
    }
