<?php

    namespace App\Models;

    use App\Models\Admin\Certificate;
    use Illuminate\Database\Eloquent\Model;

    class BatchStudent extends Model {

        protected $table = 'batch_student';
        const STATUS = [
            0=>'Active',
            1=>'Active',
            2=>'Completed',
            3=>'Cancelled',
            4=>'Frozen',
        ];

        public function student()
        {
            return $this->belongsTo(Student::class);
        }

        public function batch()
        {
            return $this->belongsTo(Batch::class);
        }

        public function course()
        {
            return $this->hasOneThrough(Course::class,Batch::class);
        }

        public function certificate()
        {
            return $this->hasOne(Certificate::class);
        }
    }
