<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;

    protected $primaryKey = 'access_id';

    protected $fillable = [
        'access_name',
        'access_description',
    ];

    public function userAccesses(): HasMany
    {
        return $this->hasMany(UserAccess::class, 'user_access_id');
    }

    public function accessRole(): HasMany
    {
        return $this->hasMany(AccessRole::class, 'access_role_id');
    }
}
