<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class HomeTask extends Model {

        protected $casts = [
            'due_date_time'=>'datetime',
        ];

        public function employee(): BelongsTo
        {
            return $this->belongsTo(Employee::class);
        }

        public function batch(): BelongsTo
        {
            return $this->belongsTo(Batch::class);
        }

    }
