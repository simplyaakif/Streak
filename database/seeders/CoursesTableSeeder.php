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
                ],[
                    'id'          => 2,
                    'title'       => 'IELTS',
                    'description' => 'IELTS course for going outside',
                ],[
                    'id'          => 3,
                    'title'       => 'Graphics Designing',
                    'description' => 'Designing course',
                ],[
                    'id'          => 4,
                    'title'       => 'Web Course',
                    'description' => 'Web development course',
                ],
            ];
            Course::insert($courses);
        }
    }
