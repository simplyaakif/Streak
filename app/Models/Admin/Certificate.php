<?php

    namespace App\Models\Admin;

    use App\Models\User;
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    class Certificate extends Model {

        public $guarded = [];

        public function getIssueDateAttribute($value): string
        {
            return Carbon::parse($this->attributes['published_at'])->format('d-M-Y');
        }

        public function deliveredBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(User::class, 'delivered_by');
        }
    }
