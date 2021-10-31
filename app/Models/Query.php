<?php

    namespace App\Models;

    use \DateTimeInterface;
    use App\Support\HasAdvancedFilter;
    use App\Traits\Auditable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class Query extends Model implements HasMedia {

        use HasFactory;
        use HasAdvancedFilter;
        use SoftDeletes;
        use InteractsWithMedia;
        use Auditable;

        public $table = 'queries';

        public const learning_mode
            = [
                0 => 'Regular Session - On Campus',
                1 => 'Online Session',
                2 => 'Weekend Session',
                3 => 'Individual - Campus',
                4 => 'Individual - Online',
                5 => 'Individual - Weekend',
            ];

        public const marketing
            = [
                0 => 'Internet/Website',
                1 => 'Social Media/Facebook,Instagram,Linkedin,Twitter',
                2 => 'Print Media/Brochure, Flyer,Pamphlet',
                3 => 'Pylon, Streamer, Banner, Sticker',
                4 => 'Newspaper/Advertisement',
            ];

        public const preferred_timings
            = [
                0  => '9:00 - 10:00 AM',
                1  => '10:00 - 11:00 AM',
                2  => '11:00 - 12:00 PM',
                3  => '12:00 - 01:00 PM',
                4  => '01:00 - 02:00 PM',
                5  => '02:00 - 03:00 PM',
                6  => '03:00 - 04:00 PM',
                7  => '04:00 - 05:00 PM',
                8  => '05:00 - 06:00 PM',
                9  => '06:00 - 07:00 PM',
                10 => '07:00 - 08:00 PM',
                11 => '08:00 - 09:00 PM',
                12 => '09:00 - 10:00 PM',
                13 => '10:00 - 11:00 PM',
            ];

        public $orderable
            = [
                'id',
                'name',
                'mobile',
                'email',
                'address',
            ];

        public $filterable
            = [
                'id',
                'name',
                'mobile',
                'email',
                'address',
            ];

        protected $appends
            = [
                'dp',
            ];

        protected $dates
            = [
                'created_at',
                'updated_at',
                'deleted_at',
            ];

        protected $fillable
            = [
                'name',
                'mobile',
                'email',
                'address',
            ];

        public function getHumanDateAttribute()
        {
            return $this->created_at->format('d-M-Y');
        }

        public function timelines()
        {
            return $this->belongsToMany(Timeline::class)->withPivot(['created_at','remarks','fw_date_time']);
        }

        public function courses()
        {
            return $this->belongsToMany(Course::class);
        }
        public function getPTimingsAttribute($value){
            return static::preferred_timings[$value] ?? null;
        }

        public function getReferenceAttribute($value){
            return static::marketing[$value] ?? null;
        }

        public function registerMediaConversions(Media $media = null): void
        {
            $thumbnailWidth  = 50;
            $thumbnailHeight = 50;

            $thumbnailPreviewWidth  = 120;
            $thumbnailPreviewHeight = 120;

            $this->addMediaConversion('thumbnail')->width($thumbnailWidth)->height($thumbnailHeight)->fit('crop', $thumbnailWidth, $thumbnailHeight);
            $this->addMediaConversion('preview_thumbnail')->width($thumbnailPreviewWidth)->height($thumbnailPreviewHeight)->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
        }

        public function getDpAttribute()
        {
            return $this->getMedia('query_dp')->map(function ($item) {
                $media                      = $item->toArray();
                $media['url']               = $item->getUrl();
                $media['thumbnail']         = $item->getUrl('thumbnail');
                $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

                return $media;
            });
        }

        protected function serializeDate(DateTimeInterface $date)
        {
            return $date->format('Y-m-d H:i:s');
        }
    }
