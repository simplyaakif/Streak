<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    class Recovery extends Model {

        protected $guarded = [];

        public function student()
        {
            return $this->belongsTo(Student::class);
        }

        public function course()
        {
            return $this->belongsTo(Course::class);
        }

        public function batch()
        {
            return $this->belongsTo(Batch::class);
        }

        public function account()
        {
            return $this->belongsTo(Account::class);
        }

        public function getPayingDateAttribute()
        {
            return $this->attributes['paid_on'] ? Carbon::parse($this->attributes['paid_on'])->format('d-m-Y') : null;
        }

        public function status()
        {
            if($this->attributes['due_date'] > now()) {
                return 1;
            } else {
                return 0;
            }

        }

    }
