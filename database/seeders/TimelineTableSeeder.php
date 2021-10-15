<?php

    namespace Database\Seeders;

    use App\Models\Timeline;
    use Illuminate\Database\Seeder;

    class TimelineTableSeeder extends Seeder {

        public function run()
        {
            $timelines=[
                [
                    'id'=>1,
                    'title'=>'Entry as New Query'
                ],[
                    'id'=>2,
                    'title'=>'Information'
                ],[
                    'id'=>3,
                    'title'=>'Call for Demo'
                ],[
                    'id'=>4,
                    'title'=>'Follow Up'
                ],[
                    'id'=>5,
                    'title'=>'Admission'
                ],[
                    'id'=>6,
                    'title'=>'Rejected'
                ],
            ];
            Timeline::insert($timelines);
        }
    }
