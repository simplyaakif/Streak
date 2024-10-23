<?php

namespace App\Models;

use Carbon\Carbon;
use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Student extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;
    use Auditable;
    use Notifiable;

    public const GENDER_SELECT = [
        'male'   => 'Male',
        'female' => 'Female',
    ];

    public $table = 'students';

    public $orderable = [
        'id',
        'name',
        'user.name',
        'father_name',
        'gender',
        'nationality',
        'date_of_birth',
        'cnic_passport',
        'mobile',
        'email',
    ];

    public $filterable = [
        'id',
        'name',
        'user.name',
        'father_name',
        'gender',
        'nationality',
        'date_of_birth',
        'cnic_passport',
        'mobile',
        'email',
    ];

    protected $appends = [
        'dp',
        'documents',
        'avatar_url'
    ];

    protected $dates = [
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'user_id',
        'father_name',
        'gender',
        'nationality',
        'date_of_birth',
        'cnic_passport',
        'mobile',
        'email',
        'guardian_id'
    ];

    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }




    public function routeNotificationForSms($notifiable)
    {
        return $this->mobile;
    }

    public function avatarUrl()
    {

        return 'https://api.dicebear.com/7.x/initials/svg?seed=' . $this->name;
    }
    public function getAvatarUrlAttribute(){
        return $this->avatarUrl();
    }

//    public function student_batches()
//    {
//        return $this->belongsToMany(BatchStudent::class,'batch_student');
//    }

    public function batches()
    {
        return $this->belongsToMany(Batch::class)->withPivot('id','session_start_date','session_end_date','batch_status')
            ->withTimestamps();
    }

    public function recoveries()
    {
        return $this->hasMany(Recovery::class);
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
        return $this->getMedia('student_dp')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');


            return $media;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGenderLabelAttribute($value)
    {
        return static::GENDER_SELECT[$this->gender] ?? null;
    }


    public function getDocumentsAttribute()
    {
        return $this->getMedia('student_documents')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    public function getLastLoginAttribute()
    {
        if($this->user){
            return $this->user->last_login_at? Carbon::parse($this->user->last_login_at)->format('D h:i A d-M-Y') :  'Never logged In';
        }
        else {
            return 'No User Found';
        }
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
