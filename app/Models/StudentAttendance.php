<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class StudentAttendance extends Model {

        public $guarded = [];
        const STATUS =[
            'Present',
            'Absent',
            'Late',
            'Leave'
        ];

    }
