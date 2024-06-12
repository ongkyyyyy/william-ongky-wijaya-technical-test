<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'users_id';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'username',
        'password',
        'primary_phone',
        'avatar',
        'application_id',
        'custom_data',
        'identities',
        'last_sign_in_at',
        'is_suspended'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'custom_data' => 'json',
        'identities' => 'json',
        'last_sign_in_at' => 'datetime',
        'is_suspended' => 'boolean',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function personalIdentity() : HasOne
    {
        return $this->hasOne(PersonalIdentity::class, 'users_id');
    }

    public function userAccesses(): HasMany
    {
        return $this->hasMany(UserAccess::class, 'user_acess_id');
    }

}
