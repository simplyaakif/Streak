<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    class StudentAttendance extends Model {

        public $guarded = [];
        const STATUS =[
            'Present',
            'Absent',
            'Late',
            'Leave'
        ];


        public function student(){
            return $this->belongsTo(Student::class);
        }

        public function employee()
        {
            return $this->belongsTo(Employee::class);
        }

        public function batch()
        {
            return $this->belongsTo(Batch::class);
        }

        public function getDayAttribute()
        {
            return Carbon::parse($this->datetime)->format('l');
        }



    }
