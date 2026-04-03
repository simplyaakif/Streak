<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class OnlineRegistration extends Model {
        use HasFactory;

        const STATUS = [
            'Pending'   => 'Pending',
            'Contacted' => 'Contacted / Called / Responded',
            'Enrolled'  => 'Enrolled / Admission Done',
            'Cancelled' => 'Cancelled / Not Interested',
            'Rejected'  => 'Rejected / Fee Issue | Disciplinary Issue',
        ];

        protected $guarded=[];
        protected $fillable = ['name','father_name','pak_cnic','pakistan_mobile','whatsapp_mobile','passport_number','address','email','mode_of_learning','campus_id','ace_reference','status'];

        protected function casts(): array
        {
            return [
                'status' => 'array',
            ];
        }

        public function latestStatus(): ?array
        {
            if (empty($this->status)) {
                return null;
            }
            // New format: array of history entries
            if (isset($this->status[0])) {
                return collect($this->status)->last();
            }
            // Legacy format: single object
            return $this->status;
        }

        public function courses()
        {
            return $this->belongsToMany(Course::class);
        }

        public function campus()
        {
            return $this->belongsTo(Campus::class);
        }

    }
