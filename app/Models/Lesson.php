<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Lesson extends Model {

        public $guarded = [];

        public function batch(): BelongsTo
        {
            return $this->belongsTo(Batch::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }
