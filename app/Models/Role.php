<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name',
        'role_description',
    ];

    public function accessRole(): HasMany
    {
        return $this->hasMany(AccessRole::class, 'access_role_id');
    }

    public function rolePermission(): HasMany
    {
        return $this->hasMany(RolePermission::class, 'role_permission_id');
    }

}
