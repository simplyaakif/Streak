<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Expense extends Model {

        use HasFactory;
        protected $guarded = [];
        public const types
            = [
                '0' => 'Rent',
                '1' => 'Salary',
                '2' => 'Utility Bill',
                '3' => 'Photostat/Printing',
                '4' => 'Print Marketing',
                '5' => 'Misc',

            ];

        public function transaction()
        {
            return $this->morphOne(Transaction::class,'transactionable');
        }

        public function getPaidByAttribute($value)
        {
            return $value ? User::findOrFail($value)->name : '';
        }

        public function getIsPaidAttribute($value)
        {
            return $value? "Yes" : "No";
        }

        public function getPaidOnAttribute($value){
            return Carbon::parse($value)->format('h:i:s A d-M-Y');
        }
    }
