<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Sms extends Model {

        public function smsable()
        {
            return $this->morphTo();
        }

    }
