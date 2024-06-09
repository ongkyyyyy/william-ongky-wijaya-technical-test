<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $primaryKey = 'permission_id';

    protected $fillable = [
        'permission_name',
        'permission_description',
    ];

    public function rolePermission(): HasMany
    {
        return $this->hasMany(rolePermission::class, 'role_permission_id');
    }
}
