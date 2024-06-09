<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    use HasFactory;

    protected $primaryKey = 'access_user_id';

    protected $fillable = [
        'users_id',
        'access_id'
    ];

    public function user() : belongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function access() : belongsTo
    {
        return $this->belongsTo(Access::class, 'access_id');
    }
}
