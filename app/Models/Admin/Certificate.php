<?php

    namespace App\Models\Admin;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    class Certificate extends Model {

        public $guarded = [];

        public function getIssueDateAttribute($value)
        {
            return Carbon::parse($this->attributes['published_at'])->format('d-M-Y');
        }
    }
