<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Logs extends Model
{
    protected $primaryKey = 'log_id';

    protected $fillable = [
        'users_id',
        'action'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}

