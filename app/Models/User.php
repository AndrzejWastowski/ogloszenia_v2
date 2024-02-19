<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
//use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    //use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'login',
        'name',
        'email',
        'password',
        'oldpassword',
        'facebook_id',
        'avatar',
        'google_id',
        'email_verified_at',
        'permission',
        'locale',
        'social_id',
        'social_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = [
        'profile_photo_url',
    ];

     /**
     * Check if the user is an normal.
     *
     * @return bool
     */
    public function isUser()
    {
        return $this->permission == 0;
    }

    /**
     * Check if the user is an editor/redaktor.
     *
     * @return bool
     */

    public function isEditor()
    {
        return $this->permission == 1;
    }

/**
     * Check if the user is an admin
     *
     * @return bool
     */

    public function isAdmin()
    {
        return $this->permission == 2;
    }

    /**
     * Check if the user is mixed permision an editor or admin
     *
     * @return bool
     */

    public function isEditorOrAdmin()
{
    return $this->isEditor() || $this->isAdmin();
}

    public function group()
    {
        return $this->belongsTo(UserGroup::class, 'users_groups_id');
    }
}
