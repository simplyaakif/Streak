<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Discussion extends Model {

        use HasFactory;
        protected $guarded=[];

        public function getPublishTimeAttribute()
        {
            return $this->created_at->format('F d').' at ' . $this->created_at->format('H:m A');
        }
    }
