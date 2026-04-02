<?php

namespace App\Models;

use DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WhatsappResponse extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;
    use InteractsWithMedia;

    public $table = 'whatsapp_responses';

    public $orderable = [
        'id',
        'type',
    ];

    public $filterable = [
        'id',
        'type',
    ];

    protected $fillable = [
        'type',
        'content',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('whatsapp_response_media');
    }

    public function courses(): MorphToMany
    {
        return $this->morphedByMany(
            Course::class,
            'responseable',
            'whatsapp_responseables'
        );
    }

    public function batches(): MorphToMany
    {
        return $this->morphedByMany(
            Batch::class,
            'responseable',
            'whatsapp_responseables'
        );
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
