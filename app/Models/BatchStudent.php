<?php

    namespace App\Models;

    use App\Models\Admin\Certificate;
    use Illuminate\Database\Eloquent\Model;

    class BatchStudent extends Model {

        protected $table = 'batch_student';
        public const STATUS = [
            4=>'Cancelled',
            1=>'Active',
            2=>'Completed',
            3=>'Frozen',
        ];

        public function getStatusAttribute()
        {
            return static::STATUS[$this->batch_status] ?? null;
        }

        public function student()
        {
            return $this->belongsTo(Student::class);
        }

        public function batch()
        {
            return $this->belongsTo(Batch::class);
        }

        public function recoveries()
        {
            return $this->belongsToMany(Recovery::class);
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
