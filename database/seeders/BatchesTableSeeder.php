<?php

    namespace Database\Seeders;

    use App\Models\Batch;
    use Illuminate\Database\Seeder;

    class BatchesTableSeeder extends Seeder {

        public function run()
        {
            $batches = [
                [
                    'title'=>'Spoken English',
                    'limit'=>12,
                    'session_duration'=>'3 Months',
                    'description'=>'',
                    'created_at'=>now(),
                    'course_id'=>1,

                ],
                [
                    'title'=>'IELTS',
                    'limit'=>12,
                    'session_duration'=>'6 Weeks',
                    'description'=>'',
                    'created_at'=>now(),
                    'course_id'=>2,

                ],
                [
                    'title'=>'Graphics Designing',
                    'limit'=>6,
                    'session_duration'=>'2 Months',
                    'description'=>'',
                    'created_at'=>now(),
                    'course_id'=>3,

                ],
                [
                    'title'=>'Web Course',
                    'limit'=>6,
                    'session_duration'=>'2 Months',
                    'description'=>'',
                    'created_at'=>now(),
                    'course_id'=>4,

                ]
            ];
            Batch::insert($batches);
        }
    }
