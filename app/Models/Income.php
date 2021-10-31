<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use phpDocumentor\Reflection\Types\Self_;

    class Income extends Model {

        use HasFactory;

        protected $guarded = [];
        public const Types
            = [
                '0' => 'Student Fine/Penalty',
                '1' => 'Evaluation',
                '2' => 'Misc',
                '3' => 'Cheque',
                '4' => 'Talktime',

            ];

        public function transaction()
        {
            return $this->morphOne(Transaction::class, 'transactionable');
        }

        public function getIncomeTypeAttribute()
        {
            return static::Types[$this->attributes['type']];
        }

        public function getPaidDateAttribute($value)
        {
            return Carbon::parse($this->attributes['created_at'])->format('d-m-Y');
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function acccount()
        {
            return $this->hasOneThrough(Transaction::class,Account::class);
        }

    }
