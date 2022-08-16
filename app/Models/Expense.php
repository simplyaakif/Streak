<?php

    namespace App\Models;

    use Auth;
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Expense extends Model {

        use HasFactory;
        protected $guarded = [];
        protected $casts=[
            'is_paid'=>'boolean',
        ];
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

//        public function getPaidByAttribute($value)
//        {
//            return $value ? User::findOrFail($value)->name : '';
//        }

        public function getIsPaidHumanAttribute()
        {
            if($this->is_paid == "1")
                return "Yes";
            else{
                return "No";
            }
        }

        public function getPaidOnHumanAttribute($value){
            return Carbon::parse($value)->format('h:i:s A d-M-Y');
        }

        public function vendor()
        {
            return $this->belongsTo(Vendor::class);
        }

        public function getDueDateHumanAttribute()
        {
            return $this->due_date? Carbon::parse($this->due_date)->format('d-M-Y'):null;
        }

        public function user()
        {
            return $this->belongsTo(User::class,'paid_by');
        }


        public function pay_now()
        {
            if($this->is_paid ==0 ){
                $this->paid_on = now();
                $this->paid_by = Auth::id();
                $this->is_paid = 1;
                $this->save();
                return "Paid Successfully";
            }
                return "Already Paid";
        }


    }
