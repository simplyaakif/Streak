<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class Employee extends Model implements HasMedia {

        use HasFactory;
        use InteractsWithMedia;

        protected $guarded = [];
        public const DESIGNATION = [
                'director'=>'Director',
                'front-desk-officer'=>'Front Desk Officer',
                'instructor'=>'Instructor',
                'teacher-assistant'=>'Teacher Assistant',
                'internee'=>'Internee',
                'office-boy'=>'Office Boy',
                'maid'=>'Maid',
            ];


        public function avatarUrl()
        {

            return 'https://api.dicebear.com/7.x/initials/svg?seed=' . $this->name;
        }

        public function registerMediaConversions(Media $media = null): void
        {
            $thumbnailWidth  = 50;
            $thumbnailHeight = 50;

            $thumbnailPreviewWidth  = 120;
            $thumbnailPreviewHeight = 120;

            $this->addMediaConversion('thumbnail')
                ->width($thumbnailWidth)
                ->height($thumbnailHeight)
                ->fit('crop', $thumbnailWidth, $thumbnailHeight);
            $this->addMediaConversion('preview_thumbnail')
                ->width($thumbnailPreviewWidth)
                ->height($thumbnailPreviewHeight)
                ->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
        }

        public function getDpAttribute()
        {
            return $this->getMedia('employee_dp')->map(function ($item) {
                $media = $item->toArray();
                $media['url'] = $item->getUrl();
                $media['thumbnail'] = $item->getUrl('thumbnail');
                $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');


                return $media;
            });
        }
    }
