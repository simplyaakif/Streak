<?php

namespace App\Models;

use Filament\Panel;
use Chatify\Facades\ChatifyMessenger;
use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DB;
use Filament\Models\Contracts\FilamentUser;
use Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Notifiable;
    use Impersonate;

    public $table = 'users';

    public $orderable = [
        'id',
        'name',
        'email',
        'email_verified_at',
    ];

    public $filterable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'roles.title',
    ];

    protected $hidden = [
        'remember_token',
        'password',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_staff',
        'last_login_at',
        'last_login_ip',
    ];

    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('title', 'Admin')->exists();
    }
    public function getIsStudentAttribute()
    {
        return $this->roles()->where('title', 'Student')->exists();
    }

    /**
     * @return bool
     */
    public function canImpersonate()
    {
        // For example
        return $this->is_admin == 1;
    }

    public function scopeAdmins()
    {
        return $this->whereHas('roles', fn ($q) => $q->where('title', 'Admin'));
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = Hash::needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function employee(){
        return $this->hasOne(Employee::class);
    }

    public function chat_message(){
        return DB::table('ch_messages')->where('to_id',$this->id)
            ->where('seen',0)->get();
    }


    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_super ? true:false;
    }
}
