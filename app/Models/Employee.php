<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;

    class Employee extends Model implements HasMedia {

        use HasFactory;
        use InteractsWithMedia;

        protected $guarded = [];
        public const DESIGNATION = [
                'director'=>'Director',
                'front-desk-officer'=>'Front Desk Officer',
                'instructor'=>'Instructor',
                'teacher-assistant'=>'Teacher Assistant',
                'internee'=>'Internee',
                'office-boy'=>'Office Boy',
                'maid'=>'Maid',
            ];
    }
