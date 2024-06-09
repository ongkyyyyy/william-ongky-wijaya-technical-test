<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;

    protected $primaryKey = 'role_permission_id';

    protected $fillable = [
        'role_id',
        'permission_id'
    ];

    public function role() : belongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function permission() : belongsTo
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
