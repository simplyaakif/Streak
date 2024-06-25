<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Issue extends Model {

        public $guarded = [];
        const TYPES
            = [
                '0' => 'Sales',
                '1' => 'Support',
                '2' => 'Academic',
                '3' => 'Others'
            ];

        const STATUS
            = [
                '0' => 'Active',
                '1' => 'Resolved',
                '2' => 'Closed',
                '3' => 'Merged'
            ];

        public function getTypeAttribute($value)
        {
            return static::TYPES[$value] ?? null;
        }

        public function getStatusAttribute($value)
        {
            return static::STATUS[$value] ?? null;
        }

        public function replies()
        {
            return $this->hasMany(IssueReplies::class);
        }

        public function student()
        {
            return $this->belongsTo(Student::class);
        }
    }
