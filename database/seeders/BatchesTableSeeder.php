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

                ]
            ];
            Batch::insert($batches);
        }
    }
