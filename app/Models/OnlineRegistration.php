<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class OnlineRegistration extends Model {
        use HasFactory;
        protected $guarded=[];
        protected $fillable = ['name','father_name','pak_cnic','pakistan_mobile','whatsapp_mobile','passport_number','address','email','mode_of_learning','campus_id','ace_reference'];
//        protected $casts = [
//            'courses' => 'array',
//        ];

        public function courses()
        {
            return $this->belongsToMany(Course::class);
        }

        public function campus()
        {
            return $this->belongsTo(Campus::class);
        }

    }
