<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessRole extends Model
{
    use HasFactory;

    protected $primaryKey = 'access_role_id';

    protected $fillable = [
        'access_id',
        'role_id'
    ];

    public function access() : belongsTo
    {
        return $this->belongsTo(Access::class, 'access_id');
    }

    public function role() : belongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
