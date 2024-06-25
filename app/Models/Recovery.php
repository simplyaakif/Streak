<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;

    class Recovery extends Model implements HasMedia {
        use InteractsWithMedia;
        protected $guarded = [];

        public function student()
        {
            return $this->belongsTo(Student::class);
        }

        public function batch_student()
        {
            return $this->belongsTo(BatchStudent::class);
        }


        public function getStudentDpAttribute()
        {
            $student = Student::find($this->student_id);
            return $student->getMedia('student_dp')->map(function ($item) {
                $media = $item->toArray();
                $media['url'] = $item->getUrl();
                $media['thumbnail'] = $item->getUrl('thumbnail');
                $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');


                return $media;
            });
        }

        public function getCarbonPaidOnAttribute()
        {
            return $this->attributes['paid_on'] ? Carbon::parse($this->attributes['paid_on']) : null;
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
