<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Vendor extends Model {

        protected $guarded = [];
        public const TYPES
            = [
                '0' => 'Rental',
                '1' => 'Utility Bills',
                '2' => 'Marketing',
                '3' => 'Misc',

            ];

        public function getTypeHumanAttribute()
        {
            return static::TYPES[$this->type]    ;
        }
    }
