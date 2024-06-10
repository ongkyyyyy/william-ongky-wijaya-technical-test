<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccesses extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_access_id';

    protected $fillable = [
        'users_id',
        'access_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function access()
    {
        return $this->belongsTo(Access::class, 'access_id');
    }
}
